import sys
import cv2
import numpy as np
from datetime import datetime


def calculate_accuracy(matches, ground_truth):
    correct_matches = 0

    for match in matches:
        if match.distance < ground_truth:
            correct_matches += 1

    accuracy = (correct_matches / len(matches)) * 100 
   
    return accuracy

def detect_and_match_features(image1, image2, ground_truth_distance):
    # Load images
    img1 =  cv2.resize(cv2.imread(image1, cv2.IMREAD_GRAYSCALE), (250, 500))
    img2 = cv2.resize(cv2.imread(image2, cv2.IMREAD_GRAYSCALE), (250, 500))
    # Initialize ORBA
    orb = cv2.ORB_create()

    # Find keypoints and descriptors
    keypoints1, descriptors1 = orb.detectAndCompute(img1, None)
    keypoints2, descriptors2 = orb.detectAndCompute(img2, None)

    # Create a Brute-Force matcher
    bf = cv2.BFMatcher(cv2.NORM_HAMMING, crossCheck=True)

    # Match keypoints
    matches = bf.match(descriptors1, descriptors2)
    
    # Sort matches by distance
    matches = sorted(matches, key=lambda x: x.distance)

    # Calculate accuracy
    accuracy = calculate_accuracy(matches, ground_truth_distance)
    
    #print("Accuracy: {:.2f}% ".format(accuracy))
    print(accuracy)

    matching_result = cv2.drawMatches(img1, keypoints1, img2, keypoints2, matches[:20],None,matchColor = (255, 0, 0),flags=2)
    matching_result = cv2.resize(matching_result, (800, 600))  # Adjust the window size as desired
    cv2.imwrite(image_2, matching_result)
  

image1_path = sys.argv[1]
image2_path = sys.argv[2]
image_1 = str(image1_path[2:-2])
image_2 = str(image2_path[2:-2])
ground_truth_distance = 60  # Set the ground truth distance here

detect_and_match_features(image_1, image_2, ground_truth_distance)


#now = datetime.now()

#current_time = now.strftime("%H:%M:%S")
#print("\n","Current Time =", current_time, "\n")

#for i in range(3):
#    png_1 = f"C:/Users/User/Desktop/signature/Mrs.molino_signature_{i+1}.jfif"
#    png_2 = "C:/Users/User/Desktop/signature/Mrs.molino_test_signature_forge_1.jfif"

#    image_1 = "public/signatureImage/signature_1.png"

#    image_2 = "public/signatureImage/testSignature.png"

#    image_1_o = cv2.imread(png_1)
#    cv2.imwrite(image_1, image_1_o)

#    image_2_o = cv2.imread(png_2)
#    cv2.imwrite(image_2, image_2_o)

#    print(png_1 + '\n')
#    print(png_2 + '\n')

#    detect_and_match_features(image_1, image_2, ground_truth_distance)


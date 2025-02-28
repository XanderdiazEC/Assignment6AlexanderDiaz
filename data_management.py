#!/usr/bin/env python3
import sys
import json

def process_data(values):
    # Check if all inputs are numeric
    try:
        numbers = [float(val) for val in values]
    except ValueError:
        return json.dumps({
            "error": "Error: All inputs must be numeric."
        })
    
    # Check if any value is negative
    has_negative = any(num < 0 for num in numbers)
    negative_message = "Some values are negative." if has_negative else "All values are non-negative."
    
    # Calculate average
    average = sum(numbers) / len(numbers)
    average_check = "Average is greater than 50." if average > 50 else "Average is less than or equal to 50."
    
    # Count positive numbers
    positive_count = sum(1 for num in numbers if num > 0)
    
    # Use bitwise operation to check if count is even or odd
    # If the least significant bit is 0, the number is even
    # If the least significant bit is 1, the number is odd
    is_even = (positive_count & 1) == 0
    parity_message = f"Count of positive numbers is {positive_count}, which is {'even' if is_even else 'odd'}."
    
    # Create new list with values > 10
    greater_than_ten = [num for num in numbers if num > 10]
    sorted_list = sorted(greater_than_ten)
    
    # Prepare the results
    results = {
        "original_values": numbers,
        "negative_check": negative_message,
        "average": average,
        "average_check": average_check,
        "positive_count": positive_count,
        "parity_check": parity_message,
        "greater_than_ten": greater_than_ten,
        "sorted_list": sorted_list,
        "error": None
    }
    
    return json.dumps(results)

if __name__ == "__main__":
    # Read input values from command line arguments
    if len(sys.argv) < 6:
        print(json.dumps({"error": "Error: Five numerical values are required."}))
    else:
        values = sys.argv[1:6]
        print(process_data(values))
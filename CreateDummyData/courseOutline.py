import random
from faker import Faker

fake = Faker()

courseOutline = ["Introduction to Data Science, Programming in Python, Machine Learning Basics, Database Management, Web Development Fundamentals", \
"Financial Accounting, Marketing Strategies, Business Ethics, Operations Management, Strategic Management", \
"Digital Media Production, Media Writing, Introduction to Film Studies, Social Media Marketing, Communication and Society", \
"Anatomy and Physiology, Health Informatics, Public Health Policy, Nutrition and Wellness, Epidemiology", \
"Introduction to Electrical Engineering, Mechanical Design Principles, Civil Engineering Materials, Environmental Engineering, Robotics and Automation", \
"Classroom Management, Educational Psychology, Curriculum Development, Assessment and Evaluation, Inclusive Education"]

#print("SET @last_course_id = LAST_INSERT_ID();")
courseID = 7
print("INSERT INTO course_outlines (course_id, outline_text)\n VALUES")
for i in range(599994):
    #lastID = '@last_course_id'
    outline_text = fake.random.choice(courseOutline)
    print(f"({courseID},'{outline_text}'),")
    courseID += 1
    
    if i == 599993:
        print(f"({courseID},'{outline_text}');")
        break



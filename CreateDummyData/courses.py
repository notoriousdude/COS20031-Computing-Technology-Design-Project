import random
from faker import Faker

fake = Faker()

#course name
courseName = ['Computer Science', 'Data Science', 'Web Development', 'Cybersecurity',
'Digital Marketing', 'Business Administration','Finance', 'Marketing', 'Project Management','Public Relations','Film Production', 'Graphic Design','Civil Engineering', 
'Mechanical Engineering', 'Electrical Engineering', 'Chemical Engineering', 
'Health Sciences', 'Nursing', 'Pharmacy', 'Public Health', 'Medicine', 'Physical Therapy', 'Education', 'Early Childhood Education', 'Curriculum and Instruction', 'Educational Leadership', 'Psychology', 'Counseling', 'Social Work',
'Nutrition and Dietetics', 'Fitness and Wellness', 'Health Informatics', 'Teaching English as a Second Language (TESOL)', 'Linguistics and Language Education']

#course length
courseLength = ['10 weeks', '11 weeks', '12 weeks', '13 weeks', '14 weeks', '15 weeks', '16 weeks', '17 weeks', '18 weeks', '19 weeks', '20 weeks', '21 weeks', 
'22 weeks', '23 weeks', '24 weeks', '25 weeks', '26 weeks', '27 weeks', '28 weeks', '29 weeks', '30 weeks', '31 weeks', '32 weeks', '33 weeks', '34 weeks', '35 weeks', 
'36 weeks', '37 weeks', '38 weeks', '39 weeks', '40 weeks']
#courseprice
coursePrice = ['152', '91', '267', '122', '75', '198', '105', '284', '68', '160', '234', '54', '117', '88', '203', '99', '77', '116', '215', '59', '270', 
'176', '83', '124', '189', '72', '150', '195', '106', '63', '78', '282', '131', '59', '101', '271', '219', '113', '65', '88', '157', '285', '209', '79', 
'273', '97', '252', '182', '54', '120', '66', '194', '282', '84']

#category
major = 'IT', 'Business', 'Media', 'Health', 'Education', 'Engineering'

#enrolment count
count = '5','10', '15', '20', '25', '30', '35', '40', '45', '50'

print("INSERT INTO courses (course_name, course_length, course_price, category, enrolment_count)\n VALUES")
for i in range(600000):
    
    course_name = fake.random.choice(courseName)
    course_length = fake.random.choice(courseLength)
    course_price = fake.random.choice(coursePrice)
    category = fake.random_element(elements=(major))
    enrolment_count = fake.random_element(elements=(count))

    print(f"('{course_name}','{course_length}',{course_price},'{category}',{enrolment_count}),")
    
    if i == 599999:
        print(f"('{course_name}','{course_length}',{course_price},'{category}',{enrolment_count});")
        break



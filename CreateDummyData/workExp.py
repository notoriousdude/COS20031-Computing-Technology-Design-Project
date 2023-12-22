from faker import Faker

fake = Faker()

jobName = "Software Engineer", "Marketing Manager", "Registered Nurse", "Financial Analyst", "Human Resources Specialist", "Mechanical Engineer", 
"Graphic Designer", "Data Scientist", "Operations Manager", "Civil Engineer", "Content Writer", "Medical Doctor", "Sales Representative", "Social Media Manager", 
"UX/UI Designer", "Accountant", "Electrician", "Customer Service Representative", "Project Manager", "Pharmacist", "Digital Marketing Specialist", 
"Humanitarian Aid Worker", "Environmental Scientist", "Event Planner", "Chef", "Journalist", "Art Director", "Public Relations Specialist", "Physical Therapist"

#print("SET @last_user_id = LAST_INSERT_ID();")
userID = 1
print("INSERT INTO working_experiences (user_id, job_title, employer)\n VALUES")
for i in range(600000):
    #lastID = '@last_user_id'
    
    jobTitle = fake.random_element(elements=(jobName))
    employerName = fake.name()
    print(f"({userID},'{jobTitle}','{employerName}'),")
    userID += 1
    
    if i == 599999:
        print(f"({userID},'{jobTitle}','{employerName}');")
        break



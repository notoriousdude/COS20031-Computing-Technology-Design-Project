import random
from faker import Faker

fake = Faker()

courseOutcome = ['Demonstrate proficiency in data analysis techniques', 'Develop and implement marketing strategies, Create engaging multimedia content', 'Apply principles of public health in real-world scenarios, Design electrical circuits and systems', \
'Utilize machine learning algorithms for predictive analysis, Analyze financial statements and make informed decisions, Critically analyze media texts and their cultural impact', \
'Design and analyze mechanical structures, Apply psychological theories to educational settings', \
'Build web applications with user-friendly interfaces', 'Develop ethical business practices, Produce and analyze media campaigns', \
'Promote health and wellness through education', 'Design sustainable infrastructure, Plan and execute effective curriculum development', \
'Implement database systems for efficient data storage', 'Formulate strategic business plans', 'Understand media law and ethics', 'Analyze health policies and their implications', 'Evaluate environmental impacts of engineering projects, Foster inclusive and supportive learning environments', \
'Create software solutions for real-world problems, Manage and lead teams in a corporate environment',\
'Analyze media audiences and trends', 'Conduct health research and analyze data, Optimize energy systems for efficiency, Enhance teaching methodologies for diverse learners', \
'Apply cybersecurity measures in software development', 'Develop innovative business models', 'Produce and edit digital media content, Promote community health initiatives',\
'Conduct experiments in engineering laboratories, Assess and adapt educational materials for diverse learners']

#print("SET @last_course_id = LAST_INSERT_ID();")
courseID = 7

print("INSERT INTO course_outcomes (course_id, outcome_text)\n VALUES")
for i in range(599994):
    #lastID = '@last_course_id'
    outcome_text = fake.random.choice(courseOutcome)
    print(f"({courseID},'{outcome_text}'),")
    courseID += 1
    
    if i == 599993:
        print(f"({courseID},'{outcome_text}');")
        break



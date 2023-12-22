import random
from faker import Faker

fake = Faker()
jobRequire = ['Bachelor degree in Computer Science or related field., Proficiency in programming languages such as Java, Python, or C++., Strong problem-solving and analytical skills., Effective communication and teamwork skills.', \
'Bachelor degree in Computer Science or related field., Experience with database management systems (e.g., MySQL, Oracle)., Strong problem-solving and analytical skills.',\
'Bachelor degree in Computer Science or related field., Strong problem-solving and analytical skills., Familiarity with cloud computing platforms (e.g., AWS, Azure).',\
'Bachelor degree in Business Administration or a related field., Strong analytical and quantitative skills., Effective written and verbal communication skills.', \
'Bachelor degree in Business Administration or a related field., Proficiency in Microsoft Excel and data analysis., Leadership and team management skills., Negotiation and interpersonal skills.',\
'Bachelor degree in Business Administration or a related field., Experience with project management tools and methodologies., Adaptability and problem-solving abilities., Knowledge of market trends and business strategy.', \
'Bachelor degree in Media Studies, Communications, or related field., Proficiency in multimedia software (e.g., Adobe Creative Suite).', \
'Bachelor degree in Media Studies, Communications, or related field., Excellent storytelling and writing skills., Understanding of social media platforms and trends., , Knowledge of digital marketing strategies.',\
'Bachelor degree in Media Studies, Communications, or related field., Experience with video production and editing., Graphic design and visual communication skills.',\
'Bachelor degree in Engineering (e.g., Mechanical, Electrical, Civil)., Strong mathematical and analytical skills., Proficiency in CAD software for design purposes.,Hands-on technical skills and attention to detail.', \
'Bachelor degree in a health-related field (e.g., Nursing, Biology, Public Health)., Professional licensure or certification (e.g., RN, MD, MPH)., Clinical experience and patient care skills., Knowledge of healthcare regulations and compliance., Attention to detail and accuracy in healthcare documentation., Collaboration with interdisciplinary healthcare teams.', \
'Bachelor degree in Education or a related field., Teaching certification or licensure., Pedagogical knowledge and classroom management skills., Adaptability to diverse learning styles and needs., Effective communication with students and parents., Incorporating technology in education (e-learning tools).',\
'Bachelor degree in a scientific field (e.g., Biology, Chemistry, Physics)., Research experience and methodology skills., Laboratory techniques and equipment proficiency., Understanding of safety protocols in scientific research., Collaboration with other scientists and researchers.',\
'Bachelor degree in a scientific field (e.g., Biology, Chemistry, Physics)., Analytical and critical thinking abilities., Effective written and oral communication of scientific findings.,  Problem-solving and troubleshooting skills., Publication of research in peer-reviewed journals.']

jobID = 300001
print("INSERT INTO job_requirements (job_id,requirement)\n VALUES")
for i in range(300003):
    requirements = fake.random.choice(jobRequire)

    print(f"({jobID},'{requirements}'),")
    jobID += 1
    
    if i == 300002:
        print(f"({jobID},'{requirements}');")
        break



---  

# HCI Experiment 1 & 2  

## 📌 Overview  
This folder contains the implementation of **Experiment 1 & 2** for **Human-Computer Interaction (HCI)**, focusing on form design, client-side, and server-side validation.  

## 🔹 Experiments  

- **Experiment 1:** Designed a **student data collection form** using **HTML** and **JavaScript**, along with a backend database.  
- **Experiment 2:** Implemented **client-side validation** using JavaScript and **server-side validation** for form submission.  

--- 

### **Observations & Learnings**  

1. **Form Structure & Design**  
   - Ensured proper alignment and responsiveness of input fields.  
   - Used appropriate input types (text, email, number, date) for better user experience.  

2. **Client-Side Validation (JavaScript)**  
   - Implemented validation for required fields, email format, and numeric inputs.  
   - Learned how to use **regex** for validating email and phone numbers.  
   - Debugging tip: **Event listeners** helped in real-time validation instead of waiting for form submission.  

3. **Server-Side Validation**  
   - Ensured data integrity before inserting into the database.  
   - Explored different methods like **POST requests, prepared statements, and SQL constraints**.  
   - Debugging tip: Encountered **undefined form values** when forgetting to set `name=""` attributes in `<input>` fields.  

4. **Error Handling & Debugging**  
   - Discovered that missing the `required` attribute in HTML caused unnecessary backend validation loads.  
   - Faced issues where JavaScript validation did not trigger due to incorrect function binding.  
   - Debugging tip: Used `console.log()` frequently to check variable values during runtime.  

5. **Database Connection & Queries**  
   - Used **MySQL Workbench** to create and manage the database.  
   - Debugging tip: Encountered "Access Denied" errors due to incorrect **user privileges** and solved it by granting proper access.  

6. **New Concepts Explored**  
   - Learned about **sanitizing user input** to prevent SQL injection.  
   - Understood the importance of **error messages and form feedback** for better user interaction.  

---


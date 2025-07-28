
# 📚 LifeTechies Book Management Module

A simple and educational *Book Management System* built using *PHP*, *Bootstrap*, and *DataTables*.  
This project is designed for LifeTechies trainees to learn CRUD operations, form handling, JSON data manipulation, and working with frontend data tables.

---

## 📁 Project Structure

```plaintext
├── 📁 View
│   ├── RegisterBook.html             # Register new book
│   ├── TbBookView.html               # View registered book
│   ├── EditBook.html                 # Edit book by id
│   ├── DeleteBook.html               # Delete registered book by id

├── 📁 Controller
│   ├── MdBookRoute.php               # Route mappings for API endpoints
│   └── TbBookController.php          # Handles Application logic

├── 📁 Model
│   └── TbBook.php                    # Database model logic

```

---

## 🚀 Features

- ✅ Register new books
- 📋 Display books in a searchable, paginated, and sortable table
- ✏️ Edit and update book records
- 🗑️ Delete books
- 💾 JSON-based storage and retrieval with `json_encode()` / `json_decode()`
- 📤 Export to Excel, CSV, PDF with DataTables extensions 

---

## 📦 Installation

### 🔽 Download via GitHub

You can clone this repository directly from GitHub:

```bash
git https://github.com/Thenewteejay/mdBook.git
```

### 🔽 Download via Official Website

[lifetech Modules](https://lifetech.host/hub/module)

---

## 🧰 Configure Your Environment

- Ensure your server supports the **latest version of PHP** (recommended)
- Set up **Lifetechocms** software

Install Lifetechocms using Composer:

```bash
composer create-project lifetechocms/lifetechocms "your-project-name"
```

---

## 💡 Key Concepts

- **Form Handling:** `$_POST` used to capture input and pass it to PHP controller.
- **DataTables Integration:** Enhances the display table with search, pagination, export, and responsive UI.
- JSON Persistence: Response is stored in json.
- **Controller Design Pattern:** BookController manages all book-related operations.
- **MVC Structure:** Separation of View, Controller, and Model for clean architecture

.

---

## 📡 API Resources

### Base path: `/api/books/`

```http
POST /api/books
```
🔐 Register book with valid data.  
**Controller:** `TbBookController@bookRegistration`

**Payload**
```json
{
   "title": "Enim accusantium seq",
   "author": "Est similique enim",
   "year": "2006"
}
```
**Response**
```json
{
"responseResult": "Registration successful",
"responseCode": "201",
"responseCategory": "200",
"responseData": {
        "ltId": "175344253244547",
        "title": "Enim accusantium seq",
        "author": "Est similique enim",
        "year": "2006"
    }
}
```

---

```http
PATCH /api/books/edit
```
📝 Edit registered book.  
**Controller:** `TbBookController@editBook`

**Payload**
```json
{
    "title": "Voluptas ut dignissi",
    "author": "Quo ad in est et acc",
    "year": "1971",
    "bookId" : "123
}
```
**Response**

```json
{
"responseResult": "Record Updated",
"responseCode": "202",
"responseCategory": "200",
"responseData": {
    "title": "Voluptas ut dignissi",
    "author": "Quo ad in est et acc",
    "year": "1971"
    }
}
```

---

```http
DELETE /api/books
```
🔁 Delete regeistered user.  
**Controller:** `TbBookController@deleteBook`

**Payload**
```json
{
  "bookId": "974123",
}
```
**Response**
```json
{
    "responseResult": "Deleted Successfully",
    "responseCode": "203",
    "responseCategory": "200",
    "responseData": {}
}

```

---

```http
GET /api/books
```
📩 fetch registered books.  
**Controller:** `TTbBookController@viewBooks`

**Response**
```json
{
  "responseResult": "success| failed",
  "responseCode": 201 | 101,
  "responseCategory": 200 | 100,
  "responseData": { [
            {
            "ltId": 175339967326943,
            "ltTableStatus": null,
            "title": "sadfa",
            "author": "asdfa",
            "year": 1990
            },
        ]
    }
}

```

---

## 🙋‍♂️ Author

**Thenewteejay** — [Github Profile](https://github.com/Thenewteejay)

---

## 🤝 Contributing

This module is primarily for training, but PRs and improvements are welcome!

## 🛠 How to Submit a Pull Request (PR)

1. 🍴 **Fork** the repository.
2. 🛠️ **Create** your feature branch:  
   `git checkout -b feature/YourFeatureName`
3. 🧪 **Commit** your changes:  
   `git commit -am 'Add some feature'`
4. 🚀 **Push** to the branch:  
   `git push origin feature/YourFeatureName`
5. 📩 **Open a pull request** – and describe what you’ve done!

---

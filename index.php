<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Library System Home</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:Arial, sans-serif;
    background:#050538;
    color:white;
}

/* OVERLAY */
body::before{
    content:"";
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.45);
    z-index:-1;
}

/* HEADER */
.header{
    background:rgba(255,255,255,0.08);
    backdrop-filter:blur(12px);
    padding:18px 30px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    border-bottom:1px solid rgba(255,255,255,0.15);
}

.header h2{
    font-size:28px;
}

.header a{
    color:white;
    text-decoration:none;
    margin-left:20px;
    font-weight:bold;
}

/* HERO */
.hero{
    text-align:center;
    padding:60px 20px;
}

.hero h1{
    font-size:52px;
    margin-bottom:15px;
}

.hero p{
    font-size:20px;
    max-width:700px;
    margin:auto;
}

/* MAIN FEATURE CARDS */
.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:25px;
    padding:40px;
}

.card{
    background:rgba(255,255,255,0.08);
    border-radius:20px;
    padding:30px 20px;
    text-align:center;
    color:white;
    backdrop-filter:blur(18px);
    border:1px solid rgba(255,255,255,0.2);
    box-shadow:0 8px 32px rgba(0,0,0,0.25);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-8px);
}

.icon{
    font-size:42px;
    margin-bottom:15px;
}

.card h3{
    margin-bottom:10px;
    font-size:24px;
}

.card p{
    color:#e5e7eb;
    font-size:16px;
}

/* EXTRA FEATURES */
.extra-section{
    padding:40px;
}

.extra-title{
    text-align:center;
    font-size:38px;
    margin-bottom:30px;
}

.extra-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:25px;
}

.extra-box{
    background:rgba(255,255,255,0.08);
    border-radius:18px;
    padding:25px;
    border:1px solid rgba(255,255,255,0.15);
    backdrop-filter:blur(14px);
    box-shadow:0 8px 20px rgba(0,0,0,0.2);
}

.extra-box h3{
    margin-bottom:12px;
    font-size:22px;
}

.extra-box p{
    color:#d1d5db;
    line-height:1.6;
}

.extra-icon{
    font-size:38px;
    margin-bottom:12px;
}

/* INFO BOX */
.info-box{
    width:85%;
    margin:30px auto 50px;
    background:rgba(255,255,255,0.08);
    backdrop-filter:blur(18px);
    color:white;
    border-radius:20px;
    padding:30px;
    text-align:center;
    border:1px solid rgba(255,255,255,0.2);
}

.info-box h2{
    margin-bottom:15px;
    font-size:30px;
}

.info-box p{
    font-size:18px;
    line-height:1.6;
}

/* FOOTER */
.footer{
    background:rgba(255,255,255,0.08);
    text-align:center;
    padding:18px;
    font-size:15px;
    border-top:1px solid rgba(255,255,255,0.15);
}

</style>
</head>

<body>

<div class="header">
    <h2>📚 Library System</h2>
    <div>
        <a href="login.php">Login</a>
        <a href="contact.php">Contact Us</a>
    </div>
</div>

<div class="hero">
    <h1>Welcome to Library System</h1>
    <p>Manage books, users, borrowing & fines easily</p>
</div>

<div class="cards">
    <div class="card">
        <div class="icon">📚</div>
        <h3>Book Management</h3>
        <p>Organize and monitor books efficiently.</p>
    </div>

    <div class="card">
        <div class="icon">👤</div>
        <h3>User Management</h3>
        <p>Manage staff and member accounts securely.</p>
    </div>

    <div class="card">
        <div class="icon">🔄</div>
        <h3>Borrowing</h3>
        <p>Track issued books and due dates.</p>
    </div>

    <div class="card">
        <div class="icon">💰</div>
        <h3>Fine Control</h3>
        <p>Calculate penalties automatically.</p>
    </div>
</div>

<div class="extra-section">
    <h2 class="extra-title">How the System Works</h2>

    <div class="extra-grid">

        <div class="extra-box">
            <div class="extra-icon">📖</div>
            <h3>Book Registration</h3>
            <p>Books are added into the system with title, author, category, and quantity for easy cataloging.</p>
        </div>

        <div class="extra-box">
            <div class="extra-icon">⏳</div>
            <h3>Borrow Tracking</h3>
            <p>Every borrowed book is assigned a due date to help librarians monitor returns.</p>
        </div>

        <div class="extra-box">
            <div class="extra-icon">⚠️</div>
            <h3>Fine Processing</h3>
            <p>If a book is returned late, the system calculates overdue fines automatically.</p>
        </div>

        <div class="extra-box">
            <div class="extra-icon">📊</div>
            <h3>Reports & Analytics</h3>
            <p>Generate reports about borrowed books, fines collected, and active users.</p>
        </div>

        <div class="extra-box">
            <div class="extra-icon">🔒</div>
            <h3>Secure Access</h3>
            <p>Role-based login ensures admins and users access only allowed sections.</p>
        </div>

        <div class="extra-box">
            <div class="extra-icon">🌐</div>
            <h3>System Integration</h3>
            <p>Connect modules together for seamless management of books, users, and transactions.</p>
        </div>

    </div>
</div>

<div class="info-box">
    <h2>Library Management Made Easy</h2>
    <p>This platform provides a complete digital solution for managing library resources, improving efficiency, and ensuring accountability in every transaction.</p>
</div>

<div class="footer">
    © 2026 Library System
</div>

</body>
</html>
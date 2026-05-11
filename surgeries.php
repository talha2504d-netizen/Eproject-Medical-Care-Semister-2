
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Doctors For Surgeries in Pakistan | oladoc</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
   <?php include 'navbar.php'; ?>
   <style>
        :root {
            --primary-orange: #ff9f43;
            --primary-blue: #1e3a8a;
            --bg-light: #f5f5f5;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-light);
            color: #333;
        }

        /* ===== HERO SECTION ===== */
        .hero-section {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            padding: 60px 20px;
            position: relative;
            overflow: hidden;
            min-height: 400px;
        }

        .hero-content h1 {
            font-size: 42px;
            color: #fff;
            line-height: 1.2;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero-content h1 .highlight {
            color: #ff9f43;
        }

        .hero-content p {
            color: #bdc3c7;
            font-size: 18px;
            margin-bottom: 30px;
        }

        /* ===== IMAGE SLIDER (Search ki jagah) ===== */
        .hero-image-slider {
            position: relative;
            width: 100%;
            max-width: 500px;
            height: 350px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.4);
        }

        .slider-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slider-image.active {
            opacity: 1;
        }

        .slider-dots {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255,255,255,0.5);
            cursor: pointer;
            transition: all 0.3s;
        }

        .dot.active {
            background: #ff9f43;
            width: 30px;
            border-radius: 6px;
        }

        /* ===== MAIN CONTENT ===== */
        .main-content {
            max-width: 1300px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .section-title {
            font-size: 20px;
            color: #555;
            margin-bottom: 25px;
            font-weight: 500;
        }

        .section-title span {
            color: #ff6b35;
            font-weight: 600;
        }

        /* ===== SURGERY CARDS ===== */
        .surgery-card {
            background: #fff;
            border-radius: 12px;
            padding: 20px 15px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            border: 1px solid #eee;
            height: 100%;
        }

        .surgery-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-color: #ff6b35;
        }

        .surgery-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 12px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
        }

        .surgery-icon img {
            width: 40px;
            height: 40px;
            object-fit: contain;
        }

        .surgery-name {
            font-size: 13px;
            color: #555;
            line-height: 1.4;
            font-weight: 500;
        }

        /* ===== SIDEBAR FORM ===== */
        .booking-form {
            background: #e8f4f8;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            position: sticky;
            top: 20px;
        }

        .form-title {
            font-size: 18px;
            color: #2c3e50;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            color: #555;
            margin-bottom: 6px;
            font-weight: 500;
        }

        .form-group label .required {
            color: #e74c3c;
        }

        .form-control-custom {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.3s;
            background: #fff;
        }

        .form-control-custom:focus {
            border-color: #ff6b35;
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 53, 0.25);
        }

        .submit-btn {
            width: 100%;
            padding: 14px;
            background: #1e3a8a;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }

        .submit-btn:hover {
            background: #1e40af;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 991px) {
            .hero-content h1 {
                font-size: 32px;
            }
            .hero-image-slider {
                height: 300px;
                margin-top: 30px;
            }
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 26px;
            }
            .hero-image-slider {
                height: 250px;
            }
        }

        /* ===== PLACEHOLDER STYLES ===== */
        .img-placeholder {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- ===== HERO SECTION ===== -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1>Discounted booking with <span class="highlight">Leading Surgeons</span> Anytime, Anywhere</h1>
                        <p>Specializing in surgical expertise for over 50 health issues.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- 🖼️ YAHAN AAP SLIDER IMAGES DAALEN -->
                    <div class="hero-image-slider">
                        <!-- Image 1 -->
                        <img src="https://medanta.s3.ap-south-1.amazonaws.com/blogs/January2025/KCN125TOSTRgdBXXtK1QinfWz1Ny2u-metac2h1dHRlcnN0b2NrXzI0NzIxNjQ0ODcgKDEpLmpwZw==-.jpg" alt="Slider 1" class="slider-image active img-placeholder" 
                             onerror="this.style.display='flex'; this.innerHTML='<div>🖼️ Slider Image 1<br><small>Replace src</small></div>'; this.style.alignItems='center'; this.style.justifyContent='center'; this.style.flexDirection='column';">
                        
                        <!-- Image 2 -->
                        <img src="https://drvishalkhullar.com/wp-content/uploads/Recovery-Care-Post-Heart-Transplant-Surgery.png" alt="Slider 2" class="slider-image img-placeholder"
                             onerror="this.style.display='flex'; this.innerHTML='<div>🖼️ Slider Image 2<br><small>Replace src</small></div>'; this.style.alignItems='center'; this.style.justifyContent='center'; this.style.flexDirection='column';">
                        
                        <!-- Image 3 -->
                        <img src="https://inamdarhospital.com/wp-content/uploads/2024/06/ENT-Surgeon-1024x683.jpg" alt="Slider 3" class="slider-image img-placeholder"
                             onerror="this.style.display='flex'; this.innerHTML='<div>🖼️ Slider Image 3<br><small>Replace src</small></div>'; this.style.alignItems='center'; this.style.justifyContent='center'; this.style.flexDirection='column';">
                        
                        <!-- Image 4 -->
                        <img src="https://www.shutterstock.com/image-vector/doctors-doing-surgery-vector-illustration-600nw-2613061161.jpg" alt="Slider 4" class="slider-image img-placeholder"
                             onerror="this.style.display='flex'; this.innerHTML='<div>🖼️ Slider Image 4<br><small>Replace src</small></div>'; this.style.alignItems='center'; this.style.justifyContent='center'; this.style.flexDirection='column';">
                        
                        <!-- Image 5 -->
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXGkgywievOufuRV0cTbpOa6m7U1I10GU6Fw&s" alt="Slider 5" class="slider-image img-placeholder"
                             onerror="this.style.display='flex'; this.innerHTML='<div>🖼️ Slider Image 5<br><small>Replace src</small></div>'; this.style.alignItems='center'; this.style.justifyContent='center'; this.style.flexDirection='column';">
                        
                        <!-- Dots -->
                        <div class="slider-dots">
                            <span class="dot active" onclick="goToSlide(0)"></span>
                            <span class="dot" onclick="goToSlide(1)"></span>
                            <span class="dot" onclick="goToSlide(2)"></span>
                            <span class="dot" onclick="goToSlide(3)"></span>
                            <span class="dot" onclick="goToSlide(4)"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== MAIN CONTENT ===== -->
    <div class="main-content">
        <div class="container-fluid px-0">
            <div class="row g-4">
                <!-- Surgeries Grid -->
                <div class="col-lg-9">
                    <h2 class="section-title">Specializing in surgical expertise for over <span>50 health issues</span>.</h2>
                    
                    <div class="row g-3">
                        <!-- IVF -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);">
                                    <i class="fas fa-baby" style="color: #e74c3c;"></i>
                                </div>
                                <div class="surgery-name">IVF</div>
                            </div>
                        </div>

                        <!-- Penile Implants -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);">
                                    <i class="fas fa-mars" style="color: #3498db;"></i>
                                </div>
                                <div class="surgery-name">Penile Implants</div>
                            </div>
                        </div>

                        <!-- Anal Fissure -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #d299c2 0%, #fef9d7 100%);">
                                    <i class="fas fa-procedures" style="color: #e67e22;"></i>
                                </div>
                                <div class="surgery-name">Anal Fissure Treatment</div>
                            </div>
                        </div>

                        <!-- Vasectomy -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%);">
                                    <i class="fas fa-cut" style="color: #9b59b6;"></i>
                                </div>
                                <div class="surgery-name">Vasectomy</div>
                            </div>
                        </div>

                        <!-- Hernia Surgery -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #fddb92 0%, #d1fdff 100%);">
                                    <i class="fas fa-heartbeat" style="color: #e74c3c;"></i>
                                </div>
                                <div class="surgery-name">Hernia Surgery</div>
                            </div>
                        </div>

                        <!-- Circumcision -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);">
                                    <i class="fas fa-hand-holding-medical" style="color: #1abc9c;"></i>
                                </div>
                                <div class="surgery-name">Circumcision</div>
                            </div>
                        </div>

                        <!-- Fistula -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%);">
                                    <i class="fas fa-virus" style="color: #e67e22;"></i>
                                </div>
                                <div class="surgery-name">Fistula</div>
                            </div>
                        </div>

                        <!-- Cataract -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #fdcbf1 0%, #e6dee9 100%);">
                                    <i class="fas fa-eye" style="color: #3498db;"></i>
                                </div>
                                <div class="surgery-name">Cataract Eye Surgery</div>
                            </div>
                        </div>

                        <!-- Renal Transplant -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);">
                                    <i class="fas fa-kidney" style="color: #e74c3c;"></i>
                                </div>
                                <div class="surgery-name">Renal (Kidney) Transplant</div>
                            </div>
                        </div>

                        <!-- Hysterectomy -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);">
                                    <i class="fas fa-female" style="color: #e91e63;"></i>
                                </div>
                                <div class="surgery-name">Hysterectomy</div>
                            </div>
                        </div>

                        <!-- Double Chin -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #d299c2 0%, #fef9d7 100%);">
                                    <i class="fas fa-user" style="color: #f39c12;"></i>
                                </div>
                                <div class="surgery-name">Double Chin Treatment</div>
                            </div>
                        </div>

                        <!-- Mastectomy -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%);">
                                    <i class="fas fa-ribbon" style="color: #e91e63;"></i>
                                </div>
                                <div class="surgery-name">Mastectomy</div>
                            </div>
                        </div>

                        <!-- Gynecomastia -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #fddb92 0%, #d1fdff 100%);">
                                    <i class="fas fa-male" style="color: #3498db;"></i>
                                </div>
                                <div class="surgery-name">Gynecomastia / Man boobs surgery</div>
                            </div>
                        </div>

                        <!-- Hymenoplasty -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);">
                                    <i class="fas fa-venus" style="color: #e91e63;"></i>
                                </div>
                                <div class="surgery-name">Hymenoplasty</div>
                            </div>
                        </div>

                        <!-- Breast Augmentation -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%);">
                                    <i class="fas fa-female" style="color: #ff6b9d;"></i>
                                </div>
                                <div class="surgery-name">Breast Augmentation</div>
                            </div>
                        </div>

                        <!-- IUI -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #fdcbf1 0%, #e6dee9 100%);">
                                    <i class="fas fa-baby-carriage" style="color: #1abc9c;"></i>
                                </div>
                                <div class="surgery-name">IUI</div>
                            </div>
                        </div>

                        <!-- PCNL -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);">
                                    <i class="fas fa-procedures" style="color: #e74c3c;"></i>
                                </div>
                                <div class="surgery-name">Percutaneous Nephrolithotomy (PCNL)</div>
                            </div>
                        </div>

                        <!-- Breast Surgery -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);">
                                    <i class="fas fa-heart" style="color: #e91e63;"></i>
                                </div>
                                <div class="surgery-name">Breast Surgery</div>
                            </div>
                        </div>

                        <!-- Root Canal -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #d299c2 0%, #fef9d7 100%);">
                                    <i class="fas fa-tooth" style="color: #3498db;"></i>
                                </div>
                                <div class="surgery-name">Root Canal</div>
                            </div>
                        </div>

                        <!-- CO2 Fractional Laser -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%);">
                                    <i class="fas fa-sun" style="color: #f39c12;"></i>
                                </div>
                                <div class="surgery-name">CO2 Fractional Laser</div>
                            </div>
                        </div>

                        <!-- Dental Implants -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #fddb92 0%, #d1fdff 100%);">
                                    <i class="fas fa-teeth" style="color: #1abc9c;"></i>
                                </div>
                                <div class="surgery-name">Dental Implants</div>
                            </div>
                        </div>

                        <!-- Nephrectomy -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);">
                                    <i class="fas fa-kidney" style="color: #e74c3c;"></i>
                                </div>
                                <div class="surgery-name">Nephrectomy</div>
                            </div>
                        </div>

                        <!-- Varicocele -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%);">
                                    <i class="fas fa-microscope" style="color: #9b59b6;"></i>
                                </div>
                                <div class="surgery-name">Varicocele Microsurgery (Varicocelectomy)</div>
                            </div>
                        </div>

                        <!-- ACL -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #fdcbf1 0%, #e6dee9 100%);">
                                    <i class="fas fa-bone" style="color: #95a5a6;"></i>
                                </div>
                                <div class="surgery-name">ACL Reconstruction Surgery</div>
                            </div>
                        </div>

                        <!-- Knee Replacement -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);">
                                    <i class="fas fa-walking" style="color: #e67e22;"></i>
                                </div>
                                <div class="surgery-name">Knee Replacement Surgery</div>
                            </div>
                        </div>

                        <!-- Piles Surgery -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);">
                                    <i class="fas fa-procedures" style="color: #c0392b;"></i>
                                </div>
                                <div class="surgery-name">Piles Surgery</div>
                            </div>
                        </div>

                        <!-- Hip Replacement -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #d299c2 0%, #fef9d7 100%);">
                                    <i class="fas fa-bone" style="color: #7f8c8d;"></i>
                                </div>
                                <div class="surgery-name">Hip Replacement Surgery</div>
                            </div>
                        </div>

                        <!-- Spinal Surgery -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%);">
                                    <i class="fas fa-spine" style="color: #2c3e50;"></i>
                                </div>
                                <div class="surgery-name">Spinal Surgery</div>
                            </div>
                        </div>

                        <!-- Tonsillectomy -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #fddb92 0%, #d1fdff 100%);">
                                    <i class="fas fa-head-side-cough" style="color: #e74c3c;"></i>
                                </div>
                                <div class="surgery-name">Tonsillectomy</div>
                            </div>
                        </div>

                        <!-- Appendectomy -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);">
                                    <i class="fas fa-procedures" style="color: #e67e22;"></i>
                                </div>
                                <div class="surgery-name">Appendectomy</div>
                            </div>
                        </div>

                        <!-- Cyst Removal -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%);">
                                    <i class="fas fa-virus-slash" style="color: #1abc9c;"></i>
                                </div>
                                <div class="surgery-name">Cyst Removal Under Local Anesthesia</div>
                            </div>
                        </div>

                        <!-- TURP -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #fdcbf1 0%, #e6dee9 100%);">
                                    <i class="fas fa-male" style="color: #3498db;"></i>
                                </div>
                                <div class="surgery-name">TURP</div>
                            </div>
                        </div>

                        <!-- Hydrocele -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);">
                                    <i class="fas fa-tint" style="color: #3498db;"></i>
                                </div>
                                <div class="surgery-name">Hydrocele Surgery (Hydrocelectomy)</div>
                            </div>
                        </div>

                        <!-- Lithotripsy -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);">
                                    <i class="fas fa-wave-square" style="color: #9b59b6;"></i>
                                </div>
                                <div class="surgery-name">Lithotripsy</div>
                            </div>
                        </div>

                        <!-- Open Heart -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #d299c2 0%, #fef9d7 100%);">
                                    <i class="fas fa-heart" style="color: #e74c3c;"></i>
                                </div>
                                <div class="surgery-name">Open Heart Surgery</div>
                            </div>
                        </div>

                        <!-- Tummy Tuck -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%);">
                                    <i class="fas fa-user" style="color: #f39c12;"></i>
                                </div>
                                <div class="surgery-name">Tummy Tuck Surgery</div>
                            </div>
                        </div>

                        <!-- Hypnotherapy -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #fddb92 0%, #d1fdff 100%);">
                                    <i class="fas fa-brain" style="color: #8e44ad;"></i>
                                </div>
                                <div class="surgery-name">Hypnotherapy</div>
                            </div>
                        </div>

                        <!-- Liposuction -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);">
                                    <i class="fas fa-weight" style="color: #e67e22;"></i>
                                </div>
                                <div class="surgery-name">Liposuction</div>
                            </div>
                        </div>

                        <!-- Rhinoplasty -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%);">
                                    <i class="fas fa-head-side-mask" style="color: #e91e63;"></i>
                                </div>
                                <div class="surgery-name">Rhinoplasty (Cosmetic Nose Surgery)</div>
                            </div>
                        </div>

                        <!-- LASIK -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #fdcbf1 0%, #e6dee9 100%);">
                                    <i class="fas fa-eye" style="color: #3498db;"></i>
                                </div>
                                <div class="surgery-name">LASIK Eye Surgery</div>
                            </div>
                        </div>

                        <!-- Hair Transplant -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);">
                                    <i class="fas fa-user" style="color: #795548;"></i>
                                </div>
                                <div class="surgery-name">Hair Transplant</div>
                            </div>
                        </div>

                        <!-- Caesarean -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);">
                                    <i class="fas fa-baby" style="color: #e91e63;"></i>
                                </div>
                                <div class="surgery-name">Caesarean (C-Section)</div>
                            </div>
                        </div>

                        <!-- Liver Transplant -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #d299c2 0%, #fef9d7 100%);">
                                    <i class="fas fa-liver" style="color: #8e44ad;"></i>
                                </div>
                                <div class="surgery-name">Liver Transplant</div>
                            </div>
                        </div>

                        <!-- Gall Bladder -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%);">
                                    <i class="fas fa-procedures" style="color: #f1c40f;"></i>
                                </div>
                                <div class="surgery-name">Operation Of Gall Bladder</div>
                            </div>
                        </div>

                        <!-- Heart Transplant -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #fddb92 0%, #d1fdff 100%);">
                                    <i class="fas fa-heart" style="color: #e74c3c;"></i>
                                </div>
                                <div class="surgery-name">Heart Transplant</div>
                            </div>
                        </div>

                        <!-- Prostatectomy -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);">
                                    <i class="fas fa-male" style="color: #e67e22;"></i>
                                </div>
                                <div class="surgery-name">Prostatectomy</div>
                            </div>
                        </div>

                        <!-- Laser Lithotripsy -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="surgery-card">
                                <div class="surgery-icon" style="background: linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%);">
                                    <i class="fas fa-laser-pointer" style="color: #e74c3c;"></i>
                                </div>
                                <div class="surgery-name">Laser Treatment for Urinary Stones (Laser Lithotripsy)</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===== SIDEBAR BOOKING FORM ===== -->
                <div class="col-lg-3">
                    <div class="booking-form">
                        <h3 class="form-title">Plan your Surgery with oladoc!</h3>
                        
                        <form id="surgeryForm">
                            <div class="form-group">
                                <label>Patient Name<span class="required">*</span></label>
                                <input type="text" class="form-control-custom" placeholder="Enter patient name" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Phone No<span class="required">*</span></label>
                                <input type="tel" class="form-control-custom" placeholder="Enter phone no" required>
                            </div>
                            
                            <div class="form-group">
                                <label>City<span class="required">*</span></label>
                                <select class="form-control-custom" required>
                                    <option value="">Select City</option>
                                    <option value="karachi">Karachi</option>
                                    <option value="lahore">Lahore</option>
                                    <option value="islamabad">Islamabad</option>
                                    <option value="rawalpindi">Rawalpindi</option>
                                    <option value="faisalabad">Faisalabad</option>
                                    <option value="multan">Multan</option>
                                    <option value="peshawar">Peshawar</option>
                                    <option value="quetta">Quetta</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Surgery<span class="required">*</span></label>
                                <select class="form-control-custom" required>
                                    <option value="">Select Surgery</option>
                                    <option value="ivf">IVF</option>
                                    <option value="hernia">Hernia Surgery</option>
                                    <option value="cataract">Cataract Eye Surgery</option>
                                    <option value="knee">Knee Replacement</option>
                                    <option value="liposuction">Liposuction</option>
                                    <option value="lasik">LASIK Eye Surgery</option>
                                    <option value="hair">Hair Transplant</option>
                                    <option value="rootcanal">Root Canal</option>
                                    <option value="dental">Dental Implants</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <button type="submit" class="submit-btn">Request Surgery Booking</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // ===== IMAGE SLIDER =====
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slider-image');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = slides.length;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                dots[i].classList.remove('active');
            });
            slides[index].classList.add('active');
            dots[index].classList.add('active');
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        function goToSlide(index) {
            currentSlide = index;
            showSlide(currentSlide);
        }

        // Auto change every 3 seconds
        setInterval(nextSlide, 3000);

        // ===== FORM SUBMISSION =====
        document.getElementById('surgeryForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you! Your surgery booking request has been submitted. We will contact you shortly.');
        });

        // ===== SURGERY CARD CLICK =====
        document.querySelectorAll('.surgery-card').forEach(card => {
            card.addEventListener('click', function() {
                const surgeryName = this.querySelector('.surgery-name').textContent;
                document.querySelector('.booking-form').scrollIntoView({ behavior: 'smooth' });
            });
        });
    </script>
    
   <?php
        // Include the footer
        include 'Footer.php';
    ?>

</body>
</html>

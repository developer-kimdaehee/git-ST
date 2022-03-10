<!DOCTYPE HTML>
<!--
	Paradigm Shift by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>김대희 개발 노트</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div style="line-height: 100%;" id="wrapper">

		<!-- Intro -->
		<section class="intro">
			<header>
				<h1>
					<pre style="font-size: 100%;">
김대희
개발
노트
<p style="font-size: 30%;">Developer Kim Daehee's note.
 YouTube channel. <a href="https://www.youtube.com/channel/UCPRM9Jl_7s3PEXv1WvVYwjQ"><strong style="font-size: 80%; color: red;">개발하는 김대희</strong></a></p>
							</pre>
				</h1>
				<h1 style="font-size: 400%;">Porject List</h1>

				<ul class="actions">
					<li style="font-size: 50px;">V-Studio<a href="#first" class="arrow scrolly"><span
								class="label">Next</span></a></li>
				</ul>
				<ul class="actions">
					<li style="font-size: 50px;">Rush&Fish<a href="#second" class="arrow scrolly"><span
								class="label">Next</span></a></li>
				</ul>
				<ul class="actions">
					<li style="font-size: 50px;">Matador<a href="#third" class="arrow scrolly"><span
								class="label">Next</span></a></li>
				</ul>
			</header>
			<div class="content">
				<span class="image fill" data-position="center"><img src="images/Abata.png" alt="" /></span>
			</div>
		</section>




		<!-- Section -->
		<section style="line-height: 50px; height: 100%;" id="first">
			<header style="width: 100%;">
				<h2><strong>
						<pre style="font-size: 200%;">
버츄얼 유튜버를 위한
XR 가상 스튜디오
-V-Studio-
						</pre>
					</strong></h2>
				<h2 style="font-size: 150%;"><strong>팀. Go-Gal</strong></h2>
			</header>
			<div class="content">
				<iframe width="105%" height="500px" src="https://www.youtube.com/embed/uwOWyGnF2Nc"
					title="YouTube video player" frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
					allowfullscreen></iframe>

				<!-- <span class="image main"><img src="images/Vstudio main picter.png" alt="" /></span> -->


				<p>
				<pre style="font-size: 100%; line-height:150%; letter-spacing: 0.01px;"><strong style="font-size: 150%;">개발배경</strong>

 • 네트워크 환경과 하드웨어 기술력 향상으로 시ㆍ공간 제약 없이 영상 제작이 
   가능한 시대
 • COVID 19로 인해 비대면 환경이 급속도로 증가하고 있으며, 연령층에 상관없이
   다양한 분야로부터 콘텐츠의 수요 증가
 • 라이브 스트리밍의 특성상 편집이 불가한 환경을 대체할 방안 모색
 • 의도치 않은 문제 발생 시 개인의 정보가 보호받지 못한 상황에서 무분별하게 
   공유 및 확산될 위험이 있음(사생활 보호 필요성)
				</pre>
				</p>

				<p>
				<pre style="font-size: 100%; line-height:150%; letter-spacing: 0.01px;"><strong style="font-size: 150%;">개발목적</strong>

 • 한계점 극복(현실감, 몰입감, 가상스튜디오) 
 • 현실감 있는 메타휴먼 캐릭터를 선택하여 라이브방송 진행
 • 다양한 분위기의 3D 가상스튜디오를 표현
 • 몰입감을 위해 스튜디오 페이스 트래킹, 모션 캡처, 애니메이션, 실시간 채팅 
   투표 기능 활용 가능
 • 기존 서비스 대비 비용적인 절감
				</pre>
				</p>
				<button onclick="VStudioPPT열기()"><strong style="color: red; font-size: 200%;">V-Studio_PPT</strong>
				</button>
				<div display= "none" id="V-Studio-PPT"> <iframe style="width: 800px; height:650px;"
						src="./Go-Galbi팀 3차 ppt 자료.pdf"></iframe>
					
					<pre>
					</pre>
			</div>
			<button onclick="VStudio열기()"><strong style="color: red; font-size: 200%;">Open</strong>
			</button>
			<div style="display: none;" id="기능개발" >
				<pre>
							</pre>
				<h2 style="font-size: 150%;"><strong>-개발사항 및 기능구현-</strong></h2>
				<pre style="font-size: 100%; line-height:150%; letter-spacing: 0.01px;">
 • 페이스 및 모션 트래킹, 트위치 연동 부분 개발 보조를 했으며 그 외 모든 관련
   (Character, UI, Animation, Studio, Server, 상호작용, 그 외 컨텐츠 등등)  
   메인 개발을 담당 하였습니다.

                <span class="image main"><img src="images/Vstudio/Vstudio - 페이스트래킹.png" alt="" />              <strong style="font-size: 100%; ">      -Face Tracking Animation Buleprint-</strong>
 • 본 프로젝트 메인 기능 중 하나이며 라이브링크 플러그인을 사용해야 동작이 가능합니다.
 • 메타휴먼 생성시 자동 생성, 페이스트래킹에 세부적인 부분은 추가 수정이 가능합니다.</span>
				<span class="image main"><img src="images/Vstudio/Vstudio - 모션트래킹.png" alt="" /><strong style="font-size: 100%;">                    -Motion Tracking Animation Buleprint-</strong>
 • 본 프로젝트 메인 기능 중 하나이며 PoseAI 플러그인을 사용해야 동작이 가능합니다.
 • Rayered Bland Per Bone 노드를 쓰면 특정 부위 고정 후 모션트래킹이 가능합니다. </span>
				<span class="image main"><img src="images/Vstudio/Vstudio - 캐릭터.png" alt=""/><strong style="font-size: 100%;">                           -Character Buleprint-</strong>
 • 언리얼에서 제공하는 메타휴먼과 브이로이드 캐릭터를 커스텀 하여 사용했습니다.
 • 캐릭터와 상호작용이 가능한 이벤트 기능과 애니메이션 단축키 기능을 구현했습니다.
 • 캐릭터의 Object 상호작용 같은 경우 단축키가 아닌 모션트래킹으로도 상호작용이
   (총을 들고 쏘는 모션을 하면 총알이 발사, 컵을들고 기울이면 물이 쏟아짐, 벽에
    있는 조명 스위치를 누르면 조명 on/off) 가능하게 구현했습니다.   </span>
                <span class="image main"><img src="images/Vstudio/Vstudio - 스켈레톤.png" alt=""/><img src="images/Vstudio/Vstudio - 애니메이션.png" alt=""/><strong style="font-size: 100%;">                        -Character Aimation Buleprint-</strong>
 • 개발 기간중 가장 오래 작업 하며 문제가 되었던 부분 입니다.
   아직 얼리얼엔진 내 베타 개발중인 메타휴먼에 상용화가 되있는 애니메이션 에셋을 
   사용하려 메타휴먼 스켈레톤에 임포트 시켰지만 본 크기와 갯수들이 맞지 않아 임포트가
   되어도 캐릭터 몸이 꼬이거나 접히는등 이상 오류가 생김. 이를 해결하기 위해 꽤 긴 시간을 
   공식문서 검토 및 구글링을 하게 되었고 해외 개발자 유튜버를 통하여 믹사모 컨버터와 
   메타휴먼 리타깃이 가능한 기본 스켈레톤을 배포 받았습니다. 이로인해 애니메이션 에셋 적용은
   해결 하였지만 동작 하나 하나의 세부적인 부분은 다시 잡아 줘야 활용이 가능했습니다.
   위와 같은 문제는 향후 언리얼엔진 개발사 쪽에서 조정 및 추가 업데이트를 한다는 공지가 
   있었고 추가 개발에 기다림을 가지는게 맞다고 생각합니다.    </span>

   			    <span class="image main"><img src="images/Vstudio/Vstudio - 레벨.png" alt="" /><strong style="font-size: 100%;">                    -Sudio Main Lever Buleprint-</strong>
 • 전반적인 스튜디오에 필요한 기능(카메라 시점 변경, 모니터 전원 on/off, 조명 컨트롤,
   룰렛 on/off 등등)들을 구현했습니다.
 • 크로마키 기능 사용이 가능한 스튜디오를 구현했습니다.</span>
                <span class="image main"><img src="images/Vstudio/Vstudio - 캐릭터선택.png" alt="" /><img src="images/Vstudio/Vstudio - 캐릭터선택-2.png" alt="" /><img src="images/Vstudio/Vstudio - 맵선택.png" alt="" /><img src="images/Vstudio/Vstudio - 맵선택-2.png" alt="" /><strong style="font-size: 100%;">                 -Character & Studio Selection Wiget Buleprint-</strong>
 • 9명의 캐릭터와 5종류의 스튜디오를 선택 가능하게 구현했습니다.
 • 아쉬운 점이 있다면 기능은 잘 돌아가지만 위젯 블루프린트 기능 중 Set Visibility 
   기능을 셋팅메뉴 위젯을 구현 할때 알게 되어 개발적인 부분에서 스킬이 부족했다는 
   아쉬움이 있습니다.  </span>
                <span class="image main"><img src="images/Vstudio/Vstudio - 셋팅메뉴.png" alt="" /><img src="images/Vstudio/Vstudio - 셋팅메뉴-2.png" alt="" /><strong style="font-size: 100%;">                 -Game Setting Menu Wiget Buleprint-</strong>
 • 셋팅메뉴 위젯에 필요한 디자인 에셋을 구매 하였고 파일 확인중 데모 파일에 작업된
   Set Visibility 기능을 보고 또 한번 개발에 질이 올라 가게 되었습니다.  
 • 이번 셋팅메뉴 위젯 작업으로 인해 텍스트 입력값을 받아와 이벤트 출력을 하는 기능을
   알게 되었으며 구현 가능하게 되었습니다.  </span>
 • 그외 모든 작업 도중 서버작업을 추가 및 변행하였으며 약 60%정도 기능 업로드가 되어있습니다.
 • 추가로 트위치 채팅을 이용한 채팅봇을 언리얼로 개발 및 테스트 중에 있습니다.   
						</pre>
						<button onclick="VStudio닫기()"><strong style="color: red; font-size: 200%;">Close</strong>
					</button>
			</div>

			<script>
				function VStudio열기() {
					document.getElementById('기능개발').style = 'block';
					document.getElementById('first').style.length = '9500px';
				}
				function VStudio닫기() {
					document.getElementById('기능개발').style.display = 'none';
				}

			</script>
		</section>




		<!-- Section -->
		<section style="line-height: 50px; height: 2200px;" id="second">
			<header style="width: 100%;">
				<h2><strong>
						<pre style="font-size: 200%;">
귀여운 물고기들의 
멈출 수 없는 한판 승부! 
-Rush&Fish- 
							</pre>
					</strong></h2>
				<h2 style="font-size: 150%;"><strong>팀. 김대희 황상욱 김소연</strong></h2>
			</header>
			<div class="content">
				<iframe width="105%" height="500px" src="https://www.youtube.com/embed/RJJDhlulCss"
					title="YouTube video player" frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
					allowfullscreen></iframe>
				<!-- <span class="image main"><img src="images/Vstudio main picter.png" alt="" /></span> -->


				<p>
				<pre style="font-size: 100%; line-height:150%; letter-spacing: 1px;"><strong style="font-size: 150%;">-Rush&Fish_PR-</strong>

 • 무한이 생성 되는 맵에서 상호 작용이 가능한 오브젝트들을 활용 하여
   스코어를 획득! 
 • 하이스코어(무한)가 저장되며 최고점수를 얻는게임.
 • 귀엽고 아기자기한 모드별 캐릭터와 오브젝트 및 임펙트 그리고 22개의
   경쾌한 사운드가 장점!
 • 내기 게임 한판 승부~! 하지만 꼭 꼴등은..OTL
								</pre>
				</p>
				<button onclick="RushFishPPT열기()"><strong style="color: red; font-size: 200%;">Rush&Fish_PPt</strong>
				</button>
				<div display: block; id="Rush&Fish-PPT"> <iframe style="width: 800px; height:480px;"
						src="./Rush&Fish ppt.pdf"></iframe>
					<!-- <button onclick="RushFishPPT닫기()"><strong style="color: red; font-size: 200%;">Close</strong>
					</button> -->

				</div>

				<div>
					<pre>
									</pre>
					<h2 style="font-size: 150%;"><strong>-개발사항-</strong></h2>
					<pre style="font-size: 100%; line-height:150%; letter-spacing: 1px;">
 • 첫 모바일 플랫폼 기반 개발이었으며 역활에 있어 프로그램 전반적인 기술 구현 보조를 
   담당했던 프로젝트 입니다. 
 • For Loop 노드를 이용하여 맵타일을 무한으로 생성하였고 Inrange 노드를 이용하여 
   확률로 Object를 스폰 해주는 기술을 구현하였습니다.
 • 많은 Object 상호 작용으로 인해 많은 변수의 알고리즘이 관건이었던 프로젝트라 
   GameMode 블루프린트를 적극 활용하였습니다.
   (Character와 Object 상호작용에 있어 중간 연결고리 작업)
 • 하지만…. 첫 번째 프로젝트와 같이 Custom Event, Event Dispatcher 등의 기능들을
   활용할 줄 알았다면 코딩양이 현저히 줄어드는 최적화로 인하여 좀 더 좋은 이점을 
   가져왔을 거라 생각합니다.
 • 프로젝트 진행 당시 프로그램 코드 개발보다 패키징 설정에 애를 먹었습니다. 안드로이드
   스튜디오라는 보조 프로그램을 활용해서 모바일 패키징 설정을 잡다 보니 초기 설정이
   가장 큰 걸림돌이 되었습니다. 이를 해결하기 위해 언리얼 엔진 공식문서를 참조하였으며 
   그 외 수많은 구글링을 하여 문제(언리얼 엔진과 안드로이드 스튜디오뿐만 아니라 컴퓨터
   내 시스템 속성도 세팅을 요구하는 사항, 안드로이드 버전별 SDK,NDK 세팅 사항)를 
   해결하였지만 내 컴퓨터가 아닌 다른 사람에 컴퓨터에서 똑같이 세팅을 하였을 때 또 
   다른 패키징 오류가 뜨는 사항이 생겨 난초를 겪고 이 부분의 해결에 대해서는 결국
   찾아내지 못하고 아쉽게도 프로젝트를 종료하였습니다. 
 • 초기 환경 설정의 중요성을 크게 깨닫게 되는 프로젝트였고 모바일 플랫폼으로 개발을 
   다시 한다면 세팅 환경부터 다시 확실히 다져 놓고 작업을 들어갈 생각입니다.
     
    
								</pre>
				</div>


				<script>
					function RushFishPPT열기() {
						document.getElementById('Rush&Fish-PPT').style = 'block';
					}
					// function RushFishPPT닫기() {
					// 	document.getElementById('Rush&Fish-PPT').style.display = 'none';
					// }

				</script>
		</section>




		<!-- Section -->
		<section style="line-height: 50px; height: 2300px;" id="third">
			<header style="width: 100%;">
				<h2><strong>
						<pre style="font-size: 200%;">
호러 좀비 방탈출 게임!
-Matador-
						</pre>
					</strong></h2>
				<h2 style="font-size: 150%;"><strong>팀. 김대희 황상욱</strong></h2>
			</header>
			<div class="content">
				<iframe width="105%" height="500px" src="https://www.youtube.com/embed/21q4pN0E4vQ"
					title="YouTube video player" frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
					allowfullscreen></iframe>


				<p>
				<pre style="font-size: 100%; line-height:150%; letter-spacing: 1px;"><strong style="font-size: 150%;">-Matador_PR-</strong>

 • 눈을 뜨니 좀비들에게 둘러 쌓여 영혼 상태인 나... 좀비에 빙의하여 문제를 
   해결하고 이곳을 탈출하라!  
 • 호러한 분위기를 부각 시키는 맵 디자인과 긴장감을 고조 시키는 BGM!
 • 각기 다른 개성의 9마리 좀비와 다중의 엔딩 및 게임오버.
 # 언리얼엔진4 개발 첫 프로젝트! 처음이라 대가리 깨지며 작업 했지만 개발하는
   맛을 알아버림!! 
							</pre>
				</p>
				<button onclick="MatadorPPT열기()"><strong style="color: red; font-size: 200%;">Matador_PPt</strong>
				</button>
				<div display: block; id="Matador-PPT"> <iframe style="width: 800px; height:840px;"
						src="./Matador ppt.pdf"></iframe>
					<!-- <button onclick="MatadorPPT닫기()"><strong style="color: red; font-size: 200%;">Close</strong>
					</button> -->

				</div>

				<div>
					<pre>
								</pre>
					<h2 style="font-size: 150%;"><strong>-개발사항-</strong></h2>
					<pre style="font-size: 100%; line-height:150%; letter-spacing: 1px;">
 • UI 및 Object 상호작용을 담당 하였으며 첫 프로젝트라 언리얼 관련 구글링에 기초를
   배울수 있게된 기간이라 생각합니다.
 • Possession 노드를 활용하여 빙의할 수 있는 좀비를 구현하였습니다.
 • Custom Event, Event Dispatcher, 등의 기능들을 활용 할 줄 몰랐었을 때라 
   cast to class노드 및 get actor of class노드 을 이용하여 70% 상호작용 기능을 
   구현 하였고 연결 되는 많은 변수들의 동작을 TickEvent에 구현을 해 놓아 성능 저하를
   이을킬 수 있는 개발 이었다 생각합니다.
 • 위 사실은 두번째 프로젝트가 끝이 날쯤 알게 되었으며 3번째 프로젝트 부터 같은 실수를 
   반복 하지 않기 위해 이벤트 관련 노드들 중점으로 찾아서 작업을 하게 되었습니다.
 • 시간적 여유가 된다면 VR 플렛폼으로 다시 개발 해 보고 싶은 프로젝트입니다.
							</pre>
				</div>


				<script>
					function MatadorPPT열기() {
						document.getElementById('Matador-PPT').style = 'block';
					}
					// function MatadorPPT닫기() {
					// 	document.getElementById('Matador-PPT').style.display = 'none';
					// }

				</script>
		</section>





		<!-- Section -->
		<!-- <section>
						<header>
							<h2>Feugiat consequat tempus ultrices</h2>
						</header>
						<div class="content">
							<p><strong>Etiam tristique libero</strong> eu nibh porttitor amet fermentum. Nullam venenatis erat id vehicula ultrices sed ultricies condimentum.</p>
							<ul class="feature-icons">
								<li class="icon solid fa-laptop">Consequat tempus</li>
								<li class="icon solid fa-bolt">Etiam adipiscing</li>
								<li class="icon solid fa-signal">Libero nullam</li>
								<li class="icon solid fa-cog">Blandit condimentum</li>
								<li class="icon solid fa-map-marker-alt">Lorem ipsum dolor</li>
								<li class="icon solid fa-code">Nibh amet venenatis</li>
							</ul>
							<p>Vehicula ultrices sed ultricies condimentum. Magna sed etiam consequat, et lorem adipiscing sed nulla. Volutpat nisl et tempus et dolor libero, feugiat magna tempus, sed et lorem adipiscing.</p>
						</div>
					</section> -->

		<!-- Section -->
		<!-- <section>
						<header>
							<h2>Ultrices erat magna sed condimentum</h2>
						</header>
						<div class="content">
							<p><strong>Integer mollis egestas</strong> nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p> -->

		<!-- Section -->
		<!-- <section>
									<header>
										<h3>Erat aliquam</h3>
										<p>Vehicula ultrices dolor amet ultricies et condimentum. Magna sed etiam consequat, et lorem adipiscing sed dolor sit amet, consectetur amet do eiusmod tempor incididunt  ipsum suspendisse ultrices gravida.</p>
									</header>
									<div class="content">
										<div class="gallery">
											<a href="images/gallery/fulls/01.jpg" class="landscape"><img src="images/gallery/thumbs/01.jpg" alt="" /></a>
											<a href="images/gallery/fulls/02.jpg"><img src="images/gallery/thumbs/02.jpg" alt="" /></a>
											<a href="images/gallery/fulls/03.jpg"><img src="images/gallery/thumbs/03.jpg" alt="" /></a>
											<a href="images/gallery/fulls/04.jpg" class="landscape"><img src="images/gallery/thumbs/04.jpg" alt="" /></a>
										</div>
									</div>
								</section> -->

		<!-- Section -->
		<!-- <section>
									<header>
										<h3>Nisl consequat</h3>
										<p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam sed facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet mauris. Ut magna finibus nisi nec lacinia ipsum maximus.</p>
									</header>
									<div class="content">
										<div class="gallery">
											<a href="images/gallery/fulls/05.jpg" class="landscape"><img src="images/gallery/thumbs/05.jpg" alt="" /></a>
											<a href="images/gallery/fulls/06.jpg"><img src="images/gallery/thumbs/06.jpg" alt="" /></a>
											<a href="images/gallery/fulls/07.jpg"><img src="images/gallery/thumbs/07.jpg" alt="" /></a>
										</div>
									</div>
								</section> -->

		<!-- Section -->
		<!-- <section>
									<header>
										<h3>Lorem gravida</h3>
										<p>Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aenean ornare velit lacus, ac varius sed enim lorem ullamcorper dolore.  ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis.</p>
									</header>
									<div class="content">
										<div class="gallery">
											<a href="images/gallery/fulls/08.jpg" class="portrait"><img src="images/gallery/thumbs/08.jpg" alt="" /></a>
											<a href="images/gallery/fulls/09.jpg" class="portrait"><img src="images/gallery/thumbs/09.jpg" alt="" /></a>
											<a href="images/gallery/fulls/10.jpg" class="landscape"><img src="images/gallery/thumbs/10.jpg" alt="" /></a>
										</div>
									</div>
								</section>

						</div>
					</section> -->

		<!-- Section -->
		<!-- <section>
						<header>
							<h2>Duis sed adpiscing veroeros amet</h2>
						</header>
						<div class="content">
							<p><strong>Proin tempus feugiat</strong> sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore.</p>
							<ul class="actions">
								<li><a href="#" class="button primary large">Get Started</a></li>
								<li><a href="#" class="button large">Learn More</a></li>
							</ul>
						</div>
					</section> -->

		<!-- Elements -->
		<!--
					<section>
						<header>
							<h2>Elements</h2>
						</header>
						<div class="content">

							<section>
								<header>
									<h3>Text</h3>
								</header>
								<div class="content">
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
									<hr />
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<h5>Heading Level 5</h5>
									<hr />
									<h5>Blockquote</h5>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h5>Preformatted</h5>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
  print 'Iteration ' + i;
  deck.shuffle();
  i++;
}

print 'Sorted in ' + i + ' iterations.';</code></pre>
								</div>
							</section>

							<section>
								<header>
									<h3>Lists</h3>
								</header>
								<div class="content">

									<h4>Unordered</h4>
									<ul>
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Alternate</h4>
									<ul class="alt">
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Ordered</h4>
									<ol>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis viverra.</li>
										<li>Felis enim feugiat.</li>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis lorem.</li>
										<li>Felis enim et feugiat.</li>
									</ol>
									<h4>Icons</h4>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
									</ul>

									<h4>Actions</h4>
									<ul class="actions">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions stacked">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</div>
							</section>

							<section>
								<header>
									<h3>Table</h3>
								</header>
								<div class="content">
									<h4>Default</h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h4>Alternate</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
							</section>

							<section>
								<header>
									<h3>Buttons</h3>
								</header>
								<div class="content">
									<ul class="actions">
										<li><a href="#" class="button primary">Primary</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button large">Large</a></li>
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
										<li><a href="#" class="button icon solid fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button primary disabled">Disabled</span></li>
										<li><span class="button disabled">Disabled</span></li>
									</ul>
								</div>
							</section>

							<section>
								<header>
									<h3>Form</h3>
								</header>
								<div class="content">
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="demo-name">Name</label>
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
											</div>
											<div class="field half">
												<label for="demo-email">Email</label>
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
											</div>
											<div class="field">
												<label for="demo-category">Category</label>
												<select name="demo-category" id="demo-category">
													<option value="">-</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
												</select>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-low" name="demo-priority" checked>
												<label for="demo-priority-low">Low</label>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-high" name="demo-priority">
												<label for="demo-priority-high">High</label>
											</div>
											<div class="field half">
												<input type="checkbox" id="demo-copy" name="demo-copy">
												<label for="demo-copy">Email me a copy</label>
											</div>
											<div class="field half">
												<input type="checkbox" id="demo-human" name="demo-human" checked>
												<label for="demo-human">Not a robot</label>
											</div>
											<div class="field">
												<label for="demo-message">Message</label>
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="primary" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</div>
							</section>

						</div>
					</section>
				-->
		<!-- Section -->
		<section>
			<header>
				<h2>Get in touch</h2>
			</header>
			<div class="content">
				<p><strong>Auctor commodo</strong> interdum et malesuada fames ac ante ipsum primis in faucibus.
					Pellentesque venenatis dolor imperdiet dolor mattis sagittis.</p>
				<form>
					<div class="fields">
						<div class="field half">
							<input type="text" name="name" id="name" placeholder="Name" />
						</div>
						<div class="field half">
							<input type="email" name="email" id="email" placeholder="Email" />
						</div>
						<div class="field">
							<textarea name="message" id="message" placeholder="Message" rows="7"></textarea>
						</div>
					</div>
					<!-- <ul class="actions">
						<li><input type="submit" value="Send Message" class="button primary" /></li>
					</ul> -->
				</form>
			</div>
			<footer>
				<ul class="items">
					<li>
						<h3>Email</h3>
						<a href="#">ocuuco@nate.com</a>
					</li>
					<li>
						<h3>Phone</h3>
						<a href="#">010-2443-9573</a>
					</li>
					<li>
						<h3>Address</h3>
						<span>서울시 중랑구 면목동</span>
					</li>
					<li>
						<h3>Elsewhere</h3>
						<ul class="icons">
							<li><a href="https://www.youtube.com/channel/UCPRM9Jl_7s3PEXv1WvVYwjQ" class="icon brands fa-youtube"><span class="label">Twitter</span></a></li>
							<li><a href="https://github.com/developer-kimdaehee" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</li>
				</ul>
			</footer>
		</section>



	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
# Shopping mall website
## PHP + MySQL을 이용한 쇼핑몰 웹사이트

### 1. 로그인/회원가입 기능

#### 1) 로그인 폼
<img width="1280" alt="image" src="https://github.com/rlaxxwls13/my-website/assets/101396454/7941d9f9-2813-42e8-bd88-ba6d2b80d7a9">

- 아이디/비밀번호를 입력하지 않거나, 일치하는 아이디가 DB에 없거나, 비밀번호가 일치하지 않으면 로그인 거부
- 로그인 시 세션에 멤버 정보를 저장하고 메인 페이지로 이동

#### 2) 회원가입 폼
<img width="1280" alt="image" src="https://github.com/rlaxxwls13/my-website/assets/101396454/90a83d5f-09b7-4198-8ffd-d52d3a904817">

- 아이디 입력 후 중복 검사를 완료해야 회원가입 가능
- 입력사항이 형식에 일치하지 않으면 회원가입 거부

#### 3) 메인 페이지
<img width="1280" alt="image" src="https://github.com/rlaxxwls13/my-website/assets/101396454/9d223b14-a195-4422-b377-ed84ba452db2">

- 로그인/회원가입 시 메인 페이지로 이동, 로그인된 사용자의 이름 + 환영인사 출력
- 로그아웃 시 세션에 저장된 정보를 제거하고 로그인 페이지로 이동

## 추후 구현할 기능

### 2. 상품 등록 기능
### 3. 상품 구매 기능
### 4. 리뷰 기능

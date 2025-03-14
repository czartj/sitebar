<?php

$help['100'] = <<<_P
SiteBar의 기능들은 <strong>사용자 메뉴</strong>와 폴더/링크의 <strong>팝업 메뉴</strong>를 통해서 사용할 수 있습니다. 사용자 메뉴는 SiteBar의 아래쪽에 있으며, 팝업 메뉴는 폴더 또는 링크를 오른쪽 클릭하면 나타납니다. Opera와 애플 사용자는 오른클릭 대신 Ctrl-클릭을 사용해야 합니다. Ctrl-클릭조차 되지 않을 때는 "사용자 설정"에서 "메뉴 아이콘 보기"를 체크하면, 폴더 또는 링크 아이콘 옆에 메뉴 아이콘이 나타납니다. 이 메뉴 아이콘을 클릭하면 팝업 메뉴가 나타납니다.
<p>
팝업 메뉴와 사용자 메뉴는 어떤 상황에서든 시스템에서 해당 사용자가 갖고 있는 권한에 따라서 각기 다른 명령어를 나열하여 보여줍니다. 팝업 메뉴의 어떤 항목은 해당 노드에 대한 프로그램의 상태와 사용자의 권한에 따라 사용이 안 될 수도 있습니다. 명령어는 명령어 윈도우를 통해 실행할 수 있습니다.
_P;

$help['101'] = <<<_P
폴더 또는 링크를 클릭하고 버튼을 누른채로 마우스 커서를 다른 폴더로 옮겨 봅니다. 대상 폴더가 밝게 표시되면 드래깅이 동작하고 있는 것입니다. 마우스 버튼을 떼면 지금 밝게 표시된 폴더에 드래그된 링크나 폴더가 놓여지게 됩니다.
<p>
SiteBar 팀은 드래그 & 드롭 기능을 Opera 브라우저에 대해서는 아직 구현하지 않았습니다. 대신 복사와 붙여넣기 기능을 사용해주세요.
_P;

$help['103'] = <<<_P
<p><strong>검색</strong> - 검색과 동일하지만 뒷단에서 수행되며 다른 형식으로 출력됩니다.

<p><strong>웹 검색</strong> - "웹 검색"이 허용되고 설정된 경우에 보여집니다.

<p><strong>모두 접기</strong> - 모든 폴더를 접습니다. 또한번 클릭하면(모든 노드가 이미 접혀있으면) 모든 폴더를 펼칩니다.

<p><strong>숨겨진 폴더까지 새로 고침</strong> - 서버에서 "폴더 숨기기"명령으로 숨겨진 폴더까지 포함한 모든 링크를 다시 읽어들입니다.

<p><strong>새로 고침</strong> - 서버에서 모든 링크를 다시 읽어들입니다. 브라우저에 따라 사이드바 플러그인에서는 SiteBar를 갱신하지 못할 수도 있기 때문에 여기에 이 기능을 두었습니다.
_P;

$help['200'] = <<<_P
명령어는 몇가지 논리적 그룹으로 분류되어 있습니다. 명령어에 대한 도움말을 보기 위해서는 그룹 중 하나를 선택해주세요.
_P;

$help['210'] = <<<_P
<p><strong>로그인</strong> - 사용자가 시스템에 로그인합니다. 사용자는 쿠키를 사용해서 기억되며, 언제 쿠키를 삭제할 것인지는 사용자가 선택할 수 있습니다.

<p><strong>로그아웃</strong> - 사용자가 로그아웃합니다. 공용 컴퓨터에서는 항상 이 기능을 사용해야 합니다. 로그인 할 때 세션 유지시간을 사용하거나 모든 브라우저 창을 닫으면 로그아웃이 됩니다.

<p><strong>가입</strong> - 방문자가 시스템에 가입할 수 있도록 합니다. 메일 주소에 의해서 사용자가 어떤 그룹에 가입할 수 있는지 판별 할 수 있습니다. 이 경우에는 그 메일주소를 확인해야 합니다. 이러한 작업은 사용자에게 시스템이 자동으로 확인 메일을 보내서 처리합니다. 시스템의 관리자는 새로운 사용자의 가입을 그만하게 할 수 있습니다. 또한 관리자는 SiteBar를 사용하기 전에 메일주소를 확인해야만 하도록 설정하거나, 직접 계정을 승인할 수 있습니다.
_P;

$help['220'] = <<<_P
<p><strong>설치 마무리</strong> - SiteBar를 설치하고 데이터베이스를 설정한 뒤 관리자가 처음으로 보게되는 명령어입니다. 관리 계정을 만들고 기본적인 SiteBar 옵션을 설정합니다. "개인 모드" 옵션이 선택되면 일부 기능만 사용가능할 수 있습니다.

<p><strong>SiteBar 설정</strong> - 관리자는 SiteBar 옵션을 설정할 수 있습니다. 관리자는 관리자 그룹의 구성원이거나 "설치 마무리"에서 생성한 사용자입니다. 메일 기능에 대해서는 "가입"을 참고하세요. 향후 버전에서는 몇가지 메일 기능이 더 추가될 것입니다.

<p><strong>트리 만들기</strong> -  SiteBar 설정에 따라 관리자와 메일 주소 확인된 사용자가 새로운 트리를 만들 수 있습니다. 새로운 트리가 생성되면 트리는 반드시 시스템 내의 사용자에게 할당됩니다. (관리자만이 다른 사람을 위한 트리를 만들 수 있습니다.) 팀 북마크를 만드는 일반적인 방법은 "그룹 만들기" 명령어로 새로운 그룹을 만들어 그 그룹 대표에게 새로운 트리를 만들어 할당시키는 것입니다.

_P;

$help['230'] = <<<_P
<p><strong>사용자 설정</strong> - 사용자 설정을 바꿉니다. "외부 명령어 윈도우"가 체크되어 있지 않으면 명령어 윈도우는 별도의 윈도우가 아닌 SiteBar가 있던 자리에 열릴 것입니다. 어떤 명령어는 항상 SiteBar가 있던 자리에서만 열립니다. ("로그인", "로그아웃", "가입", "사용자 설정" 등) "실행 메시지 건너뜀"이 선택되어 있으면 명령어 실행 후 확인 화면이 나타나지 않을 것입니다. "ACL 폴더 장식하기"는 별도의 권한 설정을 갖고 있는 폴더를 다르게 표시합니다.

<p><strong>소속 그룹</strong> - 사용자는 그룹을 탈퇴하거나 개방 그룹에 가입할 수 있습니다. 사용자가 그룹의 마지막 대표인 경우는 탈퇴할 수 없습니다. 이 경우에는 그룹을 삭제하기 위해 관리자에게 연락하세요.

<p><strong>메일 주소 확인</strong> - 사용자가 다른 시스템 기능을 사용하기 위해 메일 계정을 확인시킬 수 있도록 합니다.
_P;

$help['240'] = <<<_P
p><strong>사용자 관리</strong> - 사용자 리스트를 보면서 다음 명령어들을 수행할 수 있습니다.

<p><strong>사용자 편집</strong> - 비밀번호를 잊어버린 경우 복구하는 유일한 방법은 현재로서는 임시 비밀번호를 설정하고 사용자에게 메일을 보내서 변경하게 하는 것입니다. 관리자는 어떤 계정을 데모 계정으로 설정할 수 있습니다. 이 경우 사용자는 비밀번호 등 몇몇 속성을 변경할 수 없습니다.

<p><strong>사용자 삭제</strong> - 사용자와 그룹 소속 정보를 모두 삭제합니다. 이 경우 삭제하는 사용자의 트리는 모두 다른 사용자에게 전달할 수 있습니다. 어떤 그룹의 유일한 대표인 사용자는 삭제가 불가능 합니다.

<p><strong>사용자 만들기</strong> - 관리자가 다른 사용자를 "가입"시킬 수 있는 기능입니다. 이 기능으로 만들어진 사용자의 메일 주소는 확인된 것으로 취급합니다.
_P;

$help['250'] = <<<_P
<p><strong>그룹 관리</strong> - 그룹 리스트를 보면서 다음 명령어들을 수행할 수 있습니다.

<p><strong>그룹 속성</strong> - 그룹 대표가 사용할 수 있습니다. 그룹 이름, 설명, 자동 가입 이메일 정규식 등을 변경할 수 있습니다. 자동 가입 정규식이 입력되면 정규식에 맞는 메일 주소를 가진 사용자가 가입했을 때 메일 주소 확인을 요청하게 되며, 메일 주소가 확인 되면 해당 사용자는 자동으로 그룹에 가입됩니다. "확인없이 그룹 가입 허용"이 체크되어 있으면, 메일 주소 확인 없이 가입됩니다.

<p><strong>그룹 구성원</strong> - 그룹 대표가 사용자 중에서 그룹 구성원을 선택할 수 있습니다. 그룹 내의 다른 대표는 그룹 구성원에서 탈퇴시킬 수 없습니다. 먼저 "그룹 대표" 명령어로 그룹 대표 역할을 취소시켜야 합니다.

<p><strong>그룹 대표</strong> - 그룹 대표만 사용할 수 있습니다. 그룹 대표는 항상 최소한 한명 이상 남아 있어야 합니다.

<p><strong>그룹 삭제</strong> - 관리자만 사용할 수 있습니다. 그룹과 모든 구성원 정보를 삭제합니다.

<p><strong>그룹 만들기</strong> - 관리자만 사용할 수 있습니다. 그룹을 만들고 그룹의 첫번째 대표를 지정합니다.
_P;

$help['260'] = <<<_P
<@><p><strong>폴더 추가</strong> - 폴더에 새로운 하위 폴더를 추가합니다.

<p><strong>링크 추가</strong> - 폴더에 링크를 추가합니다. 북마크추가버튼으로 부터 실행될 때는 대상 폴더를 지정할 수 있고, 그렇지 않은 경우에는 명령어가 실행된 폴더에 링크를 만들 수 있습니다.

<p>

<p><strong>폴더 속성</strong> - 이름, 부가 설명 등 폴더 속성을 지정합니다.

<p><strong>폴더 삭제</strong> - 폴더를 삭제합니다. 삭제된 폴더는 "복원" 명령을 사용하거나 같은 이름의 폴더를 추가하여 되살릴 수 있습니다. 사용자는 루트 폴더를 삭제했을지라도 그 폴더에 대해서 비우기를 해야지만 실제로 삭제가 됩니다. 삭제된 폴더는 소유자에 의해서만 비우거나 복원될 수 있습니다.

<p><strong>폴더 청소하기</strong> - 선택된 폴더 내에서 삭제된 폴더나 링크를 영구적으로 지웁니다. 일단 청소된 것은 누구도 되살릴 수 없습니다!

<p><strong>복원</strong> - 기존에 삭제된 폴더나 링크를 복구합니다. 루트 폴더가 삭제되면 회색 아이콘으로 보여지며 트리 소유자에게만 보여집니다. 이 것은 다른 사용자가 실수로 모든 공유 북마크가 삭제하고 청소하는 것을 막기 위해서 입니다.

<p>

<p><strong>복사</strong> - 폴더와 그 안의 모든 내용을 클립보드에 복사합니다.

<p><strong>붙여넣기</strong> - "복사" 또는 "링크 복사" 명령이 실행되고 난 뒤에만 사용가능합니다. "붙여넣기" 명령은 사용자가 컨텐트를 옮기거나 복사할 수도 있는 권한이 있는지 판별한 뒤 가능한 것으로 선택합니다. 그렇지만 사용자는 명령어 윈도우에서 옮길 것인지 복사할 것인지 다시 선택할 수 있습니다.

<p>

<p><strong>북마크 가져오기</strong> - 폴더에 외부 파일로 부터 북마크를 가져옵니다. 이 때 서버측 시간 초과를 피하기 위해 링크 검증은 수행하지 않습니다.

<p><strong>북마크 내보내기</strong> - 폴더의 내용을 외부 파일로 내보냅니다. Netscape 북마크 파일 형식과 Opera Hotlist가 지원됩니다. 모질라는 Netscape 북마크 파일을 사용하며, IE는 이 파일 형식을 가져오거나 내보낼 수 있습니다.

<p><strong>링크 검증</strong> - 폴더와 하위 폴더의 모든 링크를 검증합니다. 이 기능은 외부로 나가는 연결이 가능할 때만 사용할 수 있습니다. 검증하는 동안 아이콘을 찾거나 아이콘 캐시에 들어있지 않은 아이콘(잘못된 아이콘)을 삭제할 수 있습니다. 검증 페이지는 테스트가 완료된 모든 링크를 보여줍니다. 각각의 링크에 대해 아이콘을 가져와 보여주면 검증이 완료된 것입니다. 만일 아이콘이 없으면 표준 아이콘을 보여주고, 링크가 죽어있는 경우는 깨진 아이콘 이미지를 보여줍니다. 링크가 올바르고 아이콘이 있는 경우에는 해당 아이콘이 보여집니다. 브라우저가 많은 링크에 대해 실패할 수도 있습니다. 이 때는 간단하게 페이지를 새로 고침 하면 됩니다. 최근에 체크된 사이트는 무시하고 실패한 것만 다시 검증 할 수 있습니다. 죽은 링크는 표시만 될 뿐 삭제되지는 않습니다. 죽은 링크는 SiteBar에 줄이 그어진 채로 보여집니다.

<p><strong>권한 설정</strong> - 각 폴더에 대해 권한을 지정할 수 있도록 합니다. 폴더에 지정된 권하은 하위 폴더에도 적용됩니다. 자세한 정보는 "권한 관리"를 참고하세요.
_P;

$help['270'] = <<<_P
<p><strong>링크를 메일로 보내기</strong> - 다른 사람에게 메일로 링크를 보냅니다. 메일 주소가 확인된 사용자는 서버측 메일 시스템을 사용할 수 있으며, 아닌 경우에는 클라이언트의 메일 프로그램을 사용합니다.

<p><strong>링크 복사</strong> - 링크를 클립보드로 복사합니다. 복사된 것은 "붙여넣기" 명령으로 폴더에 복사하거나 옮길 수 있습니다.

<p><strong>링크 삭제</strong> - 링크를 삭제합니다. 삭제된 링크는 상위 폴더에서 "복원" 명령으로 되살릴수 있습니다.

<p><strong>속성</strong> - 링크 속성을 편집합니다. 링크를 자신만 사용하는 것으로 설정할 수 있습니다.
_P;

$help['300'] = <<<_P
SiteBar 3는 이후의 발전을 위해 2.x로부터 완전히 새로 작성되었습니다.
<p>
SiteBar 3는 북마크 트리를 그리는데는 더이상 JavaScript를 사용하지 않습니다. 그렇지만 JavaScript는 팝업 메뉴와 이이콘 변화 등 노드를 열고 닫는데 많이 사용됩니다. <a href="http://www.w3.org/TR/DOM-Level-2-Core/">Document Object Model Level 2</a>를 지원하는 브라우저에서만 사용할 수 있습니다. 이것은 매우 빠르고 점진적인 북마크 로딩을 할 수 있다는 장점이 있습니다. 대신 옛날 브라우저에서는 펼쳐진 북마크 트리만 볼 수 있으며 단지 읽기만 할 수 있습니다. (옛날 브라우저에서는 아예 볼 수 없었던 버전 2.x에 비해서는 개선된 사항입니다.)
<p>
서버측에서는 데이터가 가장 간단한 재귀적인 데이터 구조로 저장되어 있으며 트리 변경에 최적화되어 있습니다. 이것은 선택 쿼리에 매우 좋은 성능을 보입니다. 매우 많은 수의 링크에도 느려지지 않는 데이터베이스 테이블 인덱스 선택 쿼리에 감사합니다.
_P;

$help['302'] = <<<_P
SiteBar 3는 사용자 권한에 대해 두가지 단계로 검사합니다. 첫번째로 사용자는 자신이 갖고 있는 권한에 많는 명령어만 볼 수 있으며, 두번째로 실행을 요청한 명령어에 대해 실행하기 직전에 적절한 권한을 갖고 있는지 검사합니다.
<p>
시스템에는 세가지 기본 역할이 있습니다. 사용자, 그룹 대표, 관리자가 그것입니다. 그룹 대표는 그룹이 만들어질때 대표로 선택되었거나 다른 대표에 의해 선택된 사용자입니다. 그룹 대표는 특정 그룹에 대해서 역할을 하게 됩니다. 관리자는 관리자 그룹의 구성원과 "설치 마무리" 명령에서 설정된 첫번째 사용자입니다. 관리자는 그룹 대표처럼 행동할 수는 없지만 그룹을 삭제할 수는 있습니다.
<p>
SiteBar 3는 다수의 팀에서 사용하기에 적합하도록 개발되었습니다. 즉 사용자의 그룹이 북마크를 공유할 수 있다는 의미입니다. 팀의 북마크를 보존하기 위해 독자적인 권한 관리 구조를 개발하였습니다.
<p>
이 구조의 기초는 루트 폴더의 소유자가 트리에 대한 모든 권한을 가지고 있다는 것입니다. 가입할 때나 사용자를 만들 때 각 사용자에 대한 루트 폴더가 생성됩니다. 추가적으로 관리자는 어떤 사용자에게  추가적인 트리를 만들어 줄 수도 있고 직접 트리를 만들 수 있는 권한을 줄 수도 있습니다.
<p>
트리가 만들어지면 사용자는 자신의 트리에 다른 사용자 그룹이 사용할 수 있는 권한을 설정할 수 있습니다. 각 그룹에 대해서 다음과 같은 권한을 지정할 수 있습니다.

<p><strong>읽기</strong> - 그룹 사용자는 북마크를 사용할 수 있습니다. 만일 북마크를 보지 않으려면 그룹을 탈퇴해야 합니다.

<p><strong>추가</strong> - 사용자가 폴더나 링크를 추가할 수 있습니다.

<p><strong>변경</strong> - 링크나 폴더의 속성을 변경할 수 있습니다.

<p><strong>삭제</strong> - 링크나 폴더를 삭제할 수 있습니다.

<p><strong>청소</strong> - 청소를 하면 기존에 삭제된 링크나 폴더를 완전히 날리게 됩니다. 트리 안의 폴더를 다른 트리로 옮기려면 "삭제" 권한과 "청소" 권한이 같이 있어야 합니다.

<p><strong>권한승인</strong> - 그룹 구성원이 소유자와 마찬가지로 권한을 수정할 수 있습니다.

<p>
권한은 항상 상위 폴더로 부터 상속됩니다. 루트 폴더는 기본적으로 어떤 그룹에 대해서도 권한이 주어져 있지 않습니다. 사용자는 몇몇 폴더에 대해 제한적인 권한을 설정할 수 있으며 영향은 하위 폴더에도 미칩니다. 만일 폴더에 대한 권한이 상위 폴더와 완전히 동일하다면 그 권한 설정은 삭제되고 대신 권한을 상속받아 사용하게 됩니다.
<p>
그룹 대표들은 어떤 사용자로부터 그들의 그룹에 대해 설정된 모든 권한을 지울 수 있는 권한이 있습니다.
<p>
폴더 권한 구조와 함께 링크에 대한 권한 구조도 있습니다. 공개된 폴더라 할지라도 특정 링크는 자신만 보이도록 할 수 있습니다. 트리의 소유자는 어떤 링크든지 링크를 자신만 사용하는 것으로 선택할 수 있으며, 그렇게 할 경우 다른 사용자에게는 보여지지도 않고 어떤 동작도 할 수 없게 됩니다. 공유되는 폴더가 아니라면 그 안의 링크에 대해서는 자신만 사용하는 것으로 표시해도 의미가 없습니다.(기본적으로 자신만 사용하도록 설정되어 있지 않습니다.)
<p>
폴더에 대한 권한 관리 항목이 늘어날 수록 북마크를 읽어들이는 시간이 오래 걸리게 됩니다. 트리 내에 권한 지정을 너무 세분화하여 많이 사용하지 마세요.
<p>
SiteBar의 관리자가 "개인 모드"를 체크했을 때는 권한 설정 명령을 사용할 수 없습니다. 대신 폴더 속성에서 "폴더 공개" 옵션을 사용할 수 있습니다. 이 모드에서는 상위 폴더가 공개되었을 때, 하위 폴더에 대한 권한을 제한하는 것이 불가능합니다.

개인 모드와 기본인 "회사" 모드는 자유롭게 변경가능합니다. 그렇지만 개인 모드에서는 모든사용자 그룹에 대한 설정을 제외하고는 회사 모드에서 설정된 권한을 삭제하는 것이 불가능합니다.
_P;

$help['303'] = <<<_P
<@>SiteBar는 직접 사용자가 스킨을 만들 수 있습니다. 스킨을 디자인 하려면 CSS를 잘 알아야하며 새로운 스킨을 만들려면 기존 스킨을 기반으로 해야할 것입니다. 즉 "skins" 디렉토리 내에 존제하는 스킨 중 아무거나 골라 복사해서 수정하라는 의미입니다. 각 스킨은 몇몇 그림(2004년까지 유럽에 남아있는 GIF과 관련된 저작권때문에 PNG 포맷을 사용합니다)과 CSS "sitebar.css", 그리고 후킹하기 위한 PHP 파일 "hook.php"로 구성됩니다. 후킹 파일을 사용해서 SiteBar 설치시 머리말과 꼬리말을 변경할 수 있습니다.
<p>
몇몇 관리자는 자신의 사이트에 어울리는 자신만의 스킨을 만들고 싶어할 것입니다. 이 경우에는 다른 모든 스킨을 삭제하고 SiteBar 설정에서 기본 스킨으로 설정하는 것을 추천합니다. 만일 당신의 스킨을 SiteBar 배포본에 포함시키고 싶다면 개발팀에 연락하고 당신의 스킨을 최신의 안정적인 개발 버전에 적용해보아야 합니다. 규칙상 SiteBar와 SourceForge 로고는 반드시 페이지 위에 있어야 하지만 SiteBar 로고는 자유롭게 변경할 수 있습니다.
_P;

$help['305'] = <<<_P
기존에 설치된 SiteBar를 다른 서버로 이전하기 위해서는 다음과 같은 사항들이 필요합니다.
<ul>
  <li>원본 데이터베이스에서 sitebar_* 테이블들을 .SQL 파일로 내보냅니다.
  <li>이 파일들을 사용해서 사본 데이터베이스로 데이터를 저장합니다.
  <li>소프트웨어를 그대로 복사하거나 안정적인 버전의 SiteBar를 새로 설치합니다.
      (다운그레이드나 업그레이드는 자동으로 수행될 것입니다.)
  <li>inc/config.inc.php를 삭제하거나 변경된 데이터베이스 연결에 맞추어 수정합니다.
</ul>

<p>
.SQL파일로 내보내거나 들여오는 것은 <a href='http://www.phpmyadmin.net/'>phpMyAdmin</a>를 사용할 수 있습니다.
테이블 sitebar_favicon(버전 3.2.6까지 사용됨)이나 sitebar_chche(버전 3.3부터 사용됨)은 이전하지 않아도
자동으로 재구성됩니다.
_P;

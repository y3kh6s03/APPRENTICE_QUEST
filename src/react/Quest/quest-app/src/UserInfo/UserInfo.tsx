import { useState } from 'react';

type UserInfo = {
  name: string,
  age: number
}

export default function UserInfoApp() {
  const [userInfo, setUserInfo] = useState<UserInfo>({ name: '大介', age: 25 });
  const [hobbies, setHobbies] = useState<string[]>(['読書', '映画鑑賞']);

  function updateName() {
    // これはReactのベストプラクティスに反する更新方法
    // userInfo.name = '太一';
    // setUserInfo(userInfo);
    setUserInfo({ ...userInfo, name: '太一' });
  }

  function addHobby() {
    // 不正な更新方法：配列を直接変更
    // hobbies.push('新しい趣味');
    // setHobbies(hobbies);
    setHobbies([...hobbies, '新しい趣味']);
  }

  return (
    <div>
      <div>
        <h2>ユーザー情報アプリ</h2>
        <p>名前: {userInfo.name}</p>
        <p>年齢: {userInfo.age}</p>
        <button onClick={updateName}>名前を太一に変更</button>
      </div>
      <div>
        <h3>趣味</h3>
        <ul>
          {hobbies.map((hobby, index) => (
            <li key={index}>{hobby}</li>
          ))}
        </ul>
        <button onClick={addHobby}>趣味を追加（不正な方法）</button>
      </div>
    </div>
  );
}
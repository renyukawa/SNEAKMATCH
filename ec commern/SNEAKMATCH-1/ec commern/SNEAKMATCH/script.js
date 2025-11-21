/**
 * サイト訪問時のスプラッシュスクリーン制御
 * おしゃれなフェードイン・フェードアウトアニメーション
 */
document.addEventListener('DOMContentLoaded', () => {
    const splashScreen = document.getElementById('splash-screen');
    const splashText = splashScreen.querySelector('.splash-text');

    // スプラッシュスクリーンをすぐに表示状態にする (opacity: 1)
    splashScreen.classList.add('is-active');

    // テキストアニメーションの合計時間 (CSS: fadeInOutText 4s forwards)
    const textAnimationDuration = 4000; // 4秒

    // テキストアニメーション完了後にスプラッシュスクリーン全体をフェードアウト
    setTimeout(() => {
        splashScreen.classList.remove('is-active'); // opacity: 0 へ移行開始
        splashScreen.classList.add('is-hidden');    // visibility: hidden も追加

        // スプラッシュスクリーン自体のフェードアウト完了後 (CSS: transition: opacity 1s) に要素を削除
        setTimeout(() => {
            if (splashScreen.parentNode) {
                splashScreen.parentNode.removeChild(splashScreen);
            }
        }, 1000); // CSSのtransition時間に合わせて1秒後に削除
        
    }, textAnimationDuration);
});
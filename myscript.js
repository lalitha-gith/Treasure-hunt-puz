// Save puzzle state in cookie
function savePuzzleState(state) {
  document.cookie = "puzzleState=" + state;
}

// Retrieve puzzle state from cookie
function getPuzzleState() {
  const name = "puzzleState" + "=";
  const decodedCookie = decodeURIComponent(document.cookie);
  const cookieArray = decodedCookie.split(';');
  for(let i = 0; i <cookieArray.length; i++) {
    let cookie = cookieArray[i];
    while (cookie.charAt(0) == ' ') {
      cookie = cookie.substring(1);
    }
    if (cookie.indexOf(name) == 0) {
      return cookie.substring(name.length, cookie.length);
    }
  }
  return "";
}

// Check if puzzle state exists in cookie
function hasSavedPuzzleState() {
  return getPuzzleState() !== "";
}

// Restart puzzle and remove saved puzzle state from cookie
function restartPuzzle() {
  document.cookie = "puzzleState=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  // add code to restart the puzzle from the beginning
}

// Check if puzzle state should be restored on page load
if (hasSavedPuzzleState()) {
  const savedState = getPuzzleState();
  // add code to resume the puzzle from the saved state
}

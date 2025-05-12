let clockInterval; // Biến toàn cục để lưu ID của interval

function updateClock(timezone) {
    const now = new Date();
    const options = { timeZone: timezone, hour: '2-digit', minute: '2-digit', second: '2-digit' };
    const timeString = now.toLocaleTimeString('en-GB', options);
    document.getElementById('clock').textContent = timeString;
}

function changeTimezone() {
    const timezone = document.getElementById('timezone-select').value;
    
    // Dừng interval cũ nếu có
    if (clockInterval) {
        clearInterval(clockInterval);
    }
    
    // Cập nhật đồng hồ ngay lập tức
    updateClock(timezone);
    
    // Tạo interval mới
    clockInterval = setInterval(() => updateClock(timezone), 1000);
}

// Khởi động đồng hồ mặc định khi trang tải
document.addEventListener('DOMContentLoaded', () => {
    const defaultTimezone = document.getElementById('timezone-select').value;
    updateClock(defaultTimezone);
    clockInterval = setInterval(() => updateClock(defaultTimezone), 1000);
});
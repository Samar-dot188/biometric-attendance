from playwright.sync_api import sync_playwright

with sync_playwright() as p:
    browser = p.chromium.launch()
    page = browser.new_page()
    page.goto("http://localhost/public/login.php")
    page.fill('input[name="email"]', "test@test.com")
    page.fill('input[name="pwd"]', "password")
    page.click('button[name="login"]')
    page.wait_for_url("http://localhost/public/index.php?login=success")
    page.screenshot(path="jules-scratch/verification/verification.png")
    browser.close()

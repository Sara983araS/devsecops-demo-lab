# DevSecOps Demo Lab

> ⚠️ **WARNING**: This repository contains **intentionally vulnerable code** 
> copied from DVWA (Damn Vulnerable Web Application) for security training purposes.
> 
> **DO NOT deploy this code to any server. Never use in production.**
> This is a static code analysis demo only.

## Purpose

Demonstrates DevSecOps security gates running on a CI pipeline:

| Tool | Type | What it catches |
|------|------|----------------|
| Semgrep | SAST | SQL Injection, XSS, Command Injection in PHP |
| OSV-Scanner | SCA | CVEs in outdated PHP dependencies |
| Gitleaks | Secrets | Hardcoded AWS keys, passwords |

## Vulnerabilities in this repo (intentional)

- `src/vulnerabilities/sqli/sqli.php` — SQL Injection (DVWA Low)
- `src/vulnerabilities/xss/xss_r.php` — Reflected XSS (DVWA Low)  
- `src/vulnerabilities/cmdi/cmdi.php` — Command Injection (DVWA Low)
- `src/config/config.php` — Hardcoded credentials + fake AWS key

## Security scan results

Check the **Security → Code Scanning** tab for live Semgrep findings.
Check the **Actions** tab for OSV-Scanner and Gitleaks results.
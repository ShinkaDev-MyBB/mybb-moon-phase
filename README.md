# Moon Phase
Provides moon phase data for use in index templates.

## Installation
Upload `inc` to the root of your MyBB installation.

## Usage
| Variable               | Description                       | Example         |
|------------------------|-----------------------------------|-----------------|
| `{$moon['full_moon']}` | Unix timestamp for next full moon | 1525049954.83   |
| `{$moon['new_moon']}`  | Unix timestamp for next new moon  | 1526384989.8132 |
| `{$moon['phase']}`     | Current moon phase                | Full Moon       |
| `{$moon['stage']}`     | Current moon stage                | Waxing          |
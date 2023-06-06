# Developer configuration in production mode
Magneto 2 module that restores developer configuration in the production mode


## Install
1 - Add git repository in composer.json:
```json
{
  "repositories": {
    "0": {
      "name": "mizir/developer-configuration-in-production-mode",
      "type": "git",
      "url": "https://github.com/Zuablitsev-Mikhail/magento2-developer-configuration-in-production-mode"
    }
  }
}
```
2 - Create a folder for git cache in composer and grant it write rights:
```bash
sudo mkdir -p ~/.composer/cache ~/.composer/cache/vcs
sudo chmod 777 ~/.composer/cache/vcs
```
3 - Run composer require:
```bash
ahoy composer require mizir/developer-configuration-in-production-mode<tag_version>
```


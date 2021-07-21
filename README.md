# Internal Payment Method Extension (Magento CE 2.3+)

Enable internal payments from the Magento 2 backend when creating backend sales.

## Installation
### Install using [composer](https://getcomposer.org/):

1. Navigate to the root folder of your Magento 2 installation
2. Run the following command:
    ```bash
    composer require timeleisure/m2-internalpayment
    ```

3. Run the commands below to enable the extension:

    ```bash
    php bin/magento module:enable Timeleisure_Internalpayment --clear-static-content
    php bin/magento setup:upgrade
    ```

## Compatibility

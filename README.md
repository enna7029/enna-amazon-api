## 获取订单预览信息
```php
 /**
     * 获取订单预览信息
     * @return void
     * @throws \Exception
     */
    public function getFulfillmentPreview()
    {
        //body
        $getFulfillmentPreviewRequest = new GetFulfillmentPreviewRequest();
        $getFulfillmentPreviewRequest->setMarketplaceId('A1F83G8C2ARO7P');
        $address = new Address();
        $address->setName('Cornelia Jones');
        $address->setAddressLine1('16 Celia Phillips Close');
        $address->setCity('Thetford');
        $address->setStateOrRegion('Norfolk');
        $address->setCountryCode('GB');
        $address->setPostalCode('IP24 1TU');
        $getFulfillmentPreviewRequest->setAddress($address);
        $getFulfillmentPreviewItem = new GetFulfillmentPreviewItem();
        $getFulfillmentPreviewItem->setQuantity(1);
        $getFulfillmentPreviewItem->setSellerFulfillmentOrderItemId('DS20260115093015460594968-176569');
        $getFulfillmentPreviewItem->setSellerSku('XM-Cordless Hair Straighteners');
        $money = new Money();
        $money->setValue('1.3900');
        $money->setCurrencyCode('GBP');
        $getFulfillmentPreviewItem->setPerUnitDeclaredValue($money);
        $getFulfillmentPreviewRequest->setItems([$getFulfillmentPreviewItem]);
        $getFulfillmentPreviewRequest->setShippingSpeedCategories([ShippingSpeedCategory::STANDARD]);
        $featureSettings = new FeatureSettings();
        $featureSettings->setFeatureName('');
        $featureSettings->setFeatureFulfillmentPolicy('NotRequired');
        $getFulfillmentPreviewRequest->setFeatureConstraints([$featureSettings]);

        //配置信息
        $configuration = new Configuration([
            "lwaClientId" => $this->spApiConfig['client_id'],
            "lwaClientSecret" => $this->spApiConfig['client_secret'],
            "awsAccessKeyId" => $this->spApiConfig['access_key'],
            "awsSecretAccessKey" => $this->spApiConfig['secret_key'],
            "roleArn" => $this->spApiConfig['role_arn'],
            "endpoint" => Endpoint::EU_SANDBOX,
            "lwaRefreshToken" => $this->spApiConfig['new_aws_refresh_token'],
        ]);
        $configuration->setDebug(true);
        $rootPath = app()->getRootPath();
        $configuration->setDebugFile($rootPath . 'getFulfillmentPreview.log');

        //请求
        $fbaOutboundApi = new FbaOutboundApi($configuration);
        $res = $fbaOutboundApi->getFulfillmentPreview($getFulfillmentPreviewRequest);
        print_r($res);
        exit;
```

## 创建订单
```php
//配置信息
        $configuration = new Configuration([
            "lwaClientId" => $this->spApiConfig['client_id'],
            "lwaClientSecret" => $this->spApiConfig['client_secret'],
            "awsAccessKeyId" => $this->spApiConfig['access_key'],
            "awsSecretAccessKey" => $this->spApiConfig['secret_key'],
            "roleArn" => $this->spApiConfig['role_arn'],
            "endpoint" => Endpoint::EU_SANDBOX,
            "lwaRefreshToken" => $this->spApiConfig['new_aws_refresh_token'],
        ]);

        $fbaOutboundApi = new FbaOutboundApi($configuration);

        $createFulfillmentOrderRequest = new CreateFulfillmentOrderRequest();
        $createFulfillmentOrderRequest->setMarketplaceId('A13V1IB3VIYZZH');
        $createFulfillmentOrderRequest->setSellerFulfillmentOrderId('902-6018020-02020031');
        $createFulfillmentOrderRequest->setDisplayableOrderId('902-6018020-02020031');
        $createFulfillmentOrderRequest->setDisplayableOrderDate('2020-01-09T19:46:45Z');
        $createFulfillmentOrderRequest->setDisplayableOrderComment('TestOrder');
        $createFulfillmentOrderRequest->setShippingSpeedCategory(ShippingSpeedCategory::STANDARD);

        $createFulfillmentOrderItem = new CreateFulfillmentOrderItem();
        $createFulfillmentOrderItem->setSellerSku('11');
        $createFulfillmentOrderItem->setSellerFulfillmentOrderItemId('11');
        $createFulfillmentOrderItem->setQuantity(1);
        $createFulfillmentOrderRequest->setItems([$createFulfillmentOrderItem]);

        $address = new Address();
        $address->setName('Amazon');
        $address->setAddressLine1('1234 Amazon Way');
        $address->setAddressLine2('Suite 123');
        $address->setAddressLine3('Lane1');
        $address->setStateOrRegion('MI');
        $address->setCountryCode('US');
        $address->setPostalCode('48084');
        $address->setCity('Troy');
        $createFulfillmentOrderRequest->setDestinationAddress($address);

        $configuration->setDebug(true);
        $rootPath = app()->getRootPath();
        $configuration->setDebugFile($rootPath . 'createFulfillmentOrder.log');
        $res = $fbaOutboundApi->createFulfillmentOrder($createFulfillmentOrderRequest);
        print_r($res);
        exit;
```

## 获取订单信息
```php
//配置信息
        $configuration = new Configuration([
            "lwaClientId" => $this->spApiConfig['client_id'],
            "lwaClientSecret" => $this->spApiConfig['client_secret'],
            "awsAccessKeyId" => $this->spApiConfig['access_key'],
            "awsSecretAccessKey" => $this->spApiConfig['secret_key'],
            "roleArn" => $this->spApiConfig['role_arn'],
            "endpoint" => Endpoint::EU_SANDBOX,
            "lwaRefreshToken" => $this->spApiConfig['new_aws_refresh_token'],
        ]);

        $configuration->setDebug(true);
        $rootPath = app()->getRootPath();
        $configuration->setDebugFile($rootPath . 'getFulfillmentOrder.log');
        $fbaOutboundApi = new FbaOutboundApi($configuration);
        $seller_fulfillment_order_id = '902-6018020-02020031';
        $res = $fbaOutboundApi->getFulfillmentOrder($seller_fulfillment_order_id);
        print_r($res);
        exit;
```

## 取消订单
```php
//配置信息
        $configuration = new Configuration([
            "lwaClientId" => $this->spApiConfig['client_id'],
            "lwaClientSecret" => $this->spApiConfig['client_secret'],
            "awsAccessKeyId" => $this->spApiConfig['access_key'],
            "awsSecretAccessKey" => $this->spApiConfig['secret_key'],
            "roleArn" => $this->spApiConfig['role_arn'],
            "endpoint" => Endpoint::EU_SANDBOX,
            "lwaRefreshToken" => $this->spApiConfig['new_aws_refresh_token'],
        ]);

        $configuration->setDebug(true);
        $rootPath = app()->getRootPath();
        $configuration->setDebugFile($rootPath . 'cancelFulfillmentOrder.log');
        $fbaOutboundApi = new FbaOutboundApi($configuration);
        $seller_fulfillment_order_id = '902-6018020-02020031';
        $res = $fbaOutboundApi->cancelFulfillmentOrder($seller_fulfillment_order_id);
        print_r($res);
        exit;
```
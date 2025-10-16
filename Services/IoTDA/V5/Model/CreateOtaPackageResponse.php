<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateOtaPackageResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateOtaPackageResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * packageId  **参数说明**：升级包ID，用于唯一标识一个升级包。由物联网平台分配获得。 **取值范围**：长度不超过36，只允许字母、数字、连接符（-）的组合。
    * appId  **参数说明**：资源空间ID。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * packageType  **参数说明**：升级包类型。 **取值范围**：软件包必须设置为：softwarePackage，固件包必须设置为：firmwarePackage。
    * productId  **参数说明**：设备关联的产品ID，用于唯一标识一个产品模型，创建产品后获得。方法请参见 [[创建产品](https://support.huaweicloud.com/api-iothub/iot_06_v5_0050.html)](tag:hws)[[创建产品](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0050.html)](tag:hws_hk)。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * productName  设备关联的产品名称
    * moduleName  **参数说明**：OTA模块名称，产品下唯一且不可修改。 **取值范围**：长度不超过64，号只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    * version  **参数说明**：升级包版本号。 **取值范围**：长度不超过256，只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    * supportSourceVersions  **参数说明**：支持用于升级此版本包的设备源版本号列表。最多支持20个源版本号。 **取值范围**：源版本号列表，源版本号只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    * description  **参数说明**：用于描述升级包的功能等信息。 **取值范围**：长度不超过1024。
    * customInfo  **参数说明**：推送给设备的自定义信息。添加该升级包完成，并创建升级任务后，物联网平台向设备下发升级通知时，会下发该自定义信息给设备。 **取值范围**：长度不超过4096。
    * createTime  软固件包上传到物联网平台的时间，格式：\"yyyyMMdd'T'HHmmss'Z'\"。
    * fileLocation  fileLocation
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'packageId' => 'string',
            'appId' => 'string',
            'packageType' => 'string',
            'productId' => 'string',
            'productName' => 'string',
            'moduleName' => 'string',
            'version' => 'string',
            'supportSourceVersions' => 'string[]',
            'description' => 'string',
            'customInfo' => 'string',
            'createTime' => 'string',
            'fileLocation' => '\HuaweiCloud\SDK\IoTDA\V5\Model\FileLocation'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * packageId  **参数说明**：升级包ID，用于唯一标识一个升级包。由物联网平台分配获得。 **取值范围**：长度不超过36，只允许字母、数字、连接符（-）的组合。
    * appId  **参数说明**：资源空间ID。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * packageType  **参数说明**：升级包类型。 **取值范围**：软件包必须设置为：softwarePackage，固件包必须设置为：firmwarePackage。
    * productId  **参数说明**：设备关联的产品ID，用于唯一标识一个产品模型，创建产品后获得。方法请参见 [[创建产品](https://support.huaweicloud.com/api-iothub/iot_06_v5_0050.html)](tag:hws)[[创建产品](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0050.html)](tag:hws_hk)。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * productName  设备关联的产品名称
    * moduleName  **参数说明**：OTA模块名称，产品下唯一且不可修改。 **取值范围**：长度不超过64，号只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    * version  **参数说明**：升级包版本号。 **取值范围**：长度不超过256，只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    * supportSourceVersions  **参数说明**：支持用于升级此版本包的设备源版本号列表。最多支持20个源版本号。 **取值范围**：源版本号列表，源版本号只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    * description  **参数说明**：用于描述升级包的功能等信息。 **取值范围**：长度不超过1024。
    * customInfo  **参数说明**：推送给设备的自定义信息。添加该升级包完成，并创建升级任务后，物联网平台向设备下发升级通知时，会下发该自定义信息给设备。 **取值范围**：长度不超过4096。
    * createTime  软固件包上传到物联网平台的时间，格式：\"yyyyMMdd'T'HHmmss'Z'\"。
    * fileLocation  fileLocation
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'packageId' => null,
        'appId' => null,
        'packageType' => null,
        'productId' => null,
        'productName' => null,
        'moduleName' => null,
        'version' => null,
        'supportSourceVersions' => null,
        'description' => null,
        'customInfo' => null,
        'createTime' => null,
        'fileLocation' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * packageId  **参数说明**：升级包ID，用于唯一标识一个升级包。由物联网平台分配获得。 **取值范围**：长度不超过36，只允许字母、数字、连接符（-）的组合。
    * appId  **参数说明**：资源空间ID。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * packageType  **参数说明**：升级包类型。 **取值范围**：软件包必须设置为：softwarePackage，固件包必须设置为：firmwarePackage。
    * productId  **参数说明**：设备关联的产品ID，用于唯一标识一个产品模型，创建产品后获得。方法请参见 [[创建产品](https://support.huaweicloud.com/api-iothub/iot_06_v5_0050.html)](tag:hws)[[创建产品](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0050.html)](tag:hws_hk)。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * productName  设备关联的产品名称
    * moduleName  **参数说明**：OTA模块名称，产品下唯一且不可修改。 **取值范围**：长度不超过64，号只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    * version  **参数说明**：升级包版本号。 **取值范围**：长度不超过256，只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    * supportSourceVersions  **参数说明**：支持用于升级此版本包的设备源版本号列表。最多支持20个源版本号。 **取值范围**：源版本号列表，源版本号只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    * description  **参数说明**：用于描述升级包的功能等信息。 **取值范围**：长度不超过1024。
    * customInfo  **参数说明**：推送给设备的自定义信息。添加该升级包完成，并创建升级任务后，物联网平台向设备下发升级通知时，会下发该自定义信息给设备。 **取值范围**：长度不超过4096。
    * createTime  软固件包上传到物联网平台的时间，格式：\"yyyyMMdd'T'HHmmss'Z'\"。
    * fileLocation  fileLocation
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'packageId' => 'package_id',
            'appId' => 'app_id',
            'packageType' => 'package_type',
            'productId' => 'product_id',
            'productName' => 'product_name',
            'moduleName' => 'module_name',
            'version' => 'version',
            'supportSourceVersions' => 'support_source_versions',
            'description' => 'description',
            'customInfo' => 'custom_info',
            'createTime' => 'create_time',
            'fileLocation' => 'file_location'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * packageId  **参数说明**：升级包ID，用于唯一标识一个升级包。由物联网平台分配获得。 **取值范围**：长度不超过36，只允许字母、数字、连接符（-）的组合。
    * appId  **参数说明**：资源空间ID。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * packageType  **参数说明**：升级包类型。 **取值范围**：软件包必须设置为：softwarePackage，固件包必须设置为：firmwarePackage。
    * productId  **参数说明**：设备关联的产品ID，用于唯一标识一个产品模型，创建产品后获得。方法请参见 [[创建产品](https://support.huaweicloud.com/api-iothub/iot_06_v5_0050.html)](tag:hws)[[创建产品](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0050.html)](tag:hws_hk)。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * productName  设备关联的产品名称
    * moduleName  **参数说明**：OTA模块名称，产品下唯一且不可修改。 **取值范围**：长度不超过64，号只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    * version  **参数说明**：升级包版本号。 **取值范围**：长度不超过256，只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    * supportSourceVersions  **参数说明**：支持用于升级此版本包的设备源版本号列表。最多支持20个源版本号。 **取值范围**：源版本号列表，源版本号只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    * description  **参数说明**：用于描述升级包的功能等信息。 **取值范围**：长度不超过1024。
    * customInfo  **参数说明**：推送给设备的自定义信息。添加该升级包完成，并创建升级任务后，物联网平台向设备下发升级通知时，会下发该自定义信息给设备。 **取值范围**：长度不超过4096。
    * createTime  软固件包上传到物联网平台的时间，格式：\"yyyyMMdd'T'HHmmss'Z'\"。
    * fileLocation  fileLocation
    *
    * @var string[]
    */
    protected static $setters = [
            'packageId' => 'setPackageId',
            'appId' => 'setAppId',
            'packageType' => 'setPackageType',
            'productId' => 'setProductId',
            'productName' => 'setProductName',
            'moduleName' => 'setModuleName',
            'version' => 'setVersion',
            'supportSourceVersions' => 'setSupportSourceVersions',
            'description' => 'setDescription',
            'customInfo' => 'setCustomInfo',
            'createTime' => 'setCreateTime',
            'fileLocation' => 'setFileLocation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * packageId  **参数说明**：升级包ID，用于唯一标识一个升级包。由物联网平台分配获得。 **取值范围**：长度不超过36，只允许字母、数字、连接符（-）的组合。
    * appId  **参数说明**：资源空间ID。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * packageType  **参数说明**：升级包类型。 **取值范围**：软件包必须设置为：softwarePackage，固件包必须设置为：firmwarePackage。
    * productId  **参数说明**：设备关联的产品ID，用于唯一标识一个产品模型，创建产品后获得。方法请参见 [[创建产品](https://support.huaweicloud.com/api-iothub/iot_06_v5_0050.html)](tag:hws)[[创建产品](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0050.html)](tag:hws_hk)。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * productName  设备关联的产品名称
    * moduleName  **参数说明**：OTA模块名称，产品下唯一且不可修改。 **取值范围**：长度不超过64，号只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    * version  **参数说明**：升级包版本号。 **取值范围**：长度不超过256，只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    * supportSourceVersions  **参数说明**：支持用于升级此版本包的设备源版本号列表。最多支持20个源版本号。 **取值范围**：源版本号列表，源版本号只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    * description  **参数说明**：用于描述升级包的功能等信息。 **取值范围**：长度不超过1024。
    * customInfo  **参数说明**：推送给设备的自定义信息。添加该升级包完成，并创建升级任务后，物联网平台向设备下发升级通知时，会下发该自定义信息给设备。 **取值范围**：长度不超过4096。
    * createTime  软固件包上传到物联网平台的时间，格式：\"yyyyMMdd'T'HHmmss'Z'\"。
    * fileLocation  fileLocation
    *
    * @var string[]
    */
    protected static $getters = [
            'packageId' => 'getPackageId',
            'appId' => 'getAppId',
            'packageType' => 'getPackageType',
            'productId' => 'getProductId',
            'productName' => 'getProductName',
            'moduleName' => 'getModuleName',
            'version' => 'getVersion',
            'supportSourceVersions' => 'getSupportSourceVersions',
            'description' => 'getDescription',
            'customInfo' => 'getCustomInfo',
            'createTime' => 'getCreateTime',
            'fileLocation' => 'getFileLocation'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['packageId'] = isset($data['packageId']) ? $data['packageId'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['packageType'] = isset($data['packageType']) ? $data['packageType'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['moduleName'] = isset($data['moduleName']) ? $data['moduleName'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['supportSourceVersions'] = isset($data['supportSourceVersions']) ? $data['supportSourceVersions'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['customInfo'] = isset($data['customInfo']) ? $data['customInfo'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['fileLocation'] = isset($data['fileLocation']) ? $data['fileLocation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets packageId
    *  **参数说明**：升级包ID，用于唯一标识一个升级包。由物联网平台分配获得。 **取值范围**：长度不超过36，只允许字母、数字、连接符（-）的组合。
    *
    * @return string|null
    */
    public function getPackageId()
    {
        return $this->container['packageId'];
    }

    /**
    * Sets packageId
    *
    * @param string|null $packageId **参数说明**：升级包ID，用于唯一标识一个升级包。由物联网平台分配获得。 **取值范围**：长度不超过36，只允许字母、数字、连接符（-）的组合。
    *
    * @return $this
    */
    public function setPackageId($packageId)
    {
        $this->container['packageId'] = $packageId;
        return $this;
    }

    /**
    * Gets appId
    *  **参数说明**：资源空间ID。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId **参数说明**：资源空间ID。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets packageType
    *  **参数说明**：升级包类型。 **取值范围**：软件包必须设置为：softwarePackage，固件包必须设置为：firmwarePackage。
    *
    * @return string|null
    */
    public function getPackageType()
    {
        return $this->container['packageType'];
    }

    /**
    * Sets packageType
    *
    * @param string|null $packageType **参数说明**：升级包类型。 **取值范围**：软件包必须设置为：softwarePackage，固件包必须设置为：firmwarePackage。
    *
    * @return $this
    */
    public function setPackageType($packageType)
    {
        $this->container['packageType'] = $packageType;
        return $this;
    }

    /**
    * Gets productId
    *  **参数说明**：设备关联的产品ID，用于唯一标识一个产品模型，创建产品后获得。方法请参见 [[创建产品](https://support.huaweicloud.com/api-iothub/iot_06_v5_0050.html)](tag:hws)[[创建产品](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0050.html)](tag:hws_hk)。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId **参数说明**：设备关联的产品ID，用于唯一标识一个产品模型，创建产品后获得。方法请参见 [[创建产品](https://support.huaweicloud.com/api-iothub/iot_06_v5_0050.html)](tag:hws)[[创建产品](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0050.html)](tag:hws_hk)。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets productName
    *  设备关联的产品名称
    *
    * @return string|null
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string|null $productName 设备关联的产品名称
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets moduleName
    *  **参数说明**：OTA模块名称，产品下唯一且不可修改。 **取值范围**：长度不超过64，号只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    *
    * @return string|null
    */
    public function getModuleName()
    {
        return $this->container['moduleName'];
    }

    /**
    * Sets moduleName
    *
    * @param string|null $moduleName **参数说明**：OTA模块名称，产品下唯一且不可修改。 **取值范围**：长度不超过64，号只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    *
    * @return $this
    */
    public function setModuleName($moduleName)
    {
        $this->container['moduleName'] = $moduleName;
        return $this;
    }

    /**
    * Gets version
    *  **参数说明**：升级包版本号。 **取值范围**：长度不超过256，只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数说明**：升级包版本号。 **取值范围**：长度不超过256，只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets supportSourceVersions
    *  **参数说明**：支持用于升级此版本包的设备源版本号列表。最多支持20个源版本号。 **取值范围**：源版本号列表，源版本号只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    *
    * @return string[]|null
    */
    public function getSupportSourceVersions()
    {
        return $this->container['supportSourceVersions'];
    }

    /**
    * Sets supportSourceVersions
    *
    * @param string[]|null $supportSourceVersions **参数说明**：支持用于升级此版本包的设备源版本号列表。最多支持20个源版本号。 **取值范围**：源版本号列表，源版本号只允许字母、数字、下划线（_）、连接符（-）、英文点（.）的组合。
    *
    * @return $this
    */
    public function setSupportSourceVersions($supportSourceVersions)
    {
        $this->container['supportSourceVersions'] = $supportSourceVersions;
        return $this;
    }

    /**
    * Gets description
    *  **参数说明**：用于描述升级包的功能等信息。 **取值范围**：长度不超过1024。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数说明**：用于描述升级包的功能等信息。 **取值范围**：长度不超过1024。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets customInfo
    *  **参数说明**：推送给设备的自定义信息。添加该升级包完成，并创建升级任务后，物联网平台向设备下发升级通知时，会下发该自定义信息给设备。 **取值范围**：长度不超过4096。
    *
    * @return string|null
    */
    public function getCustomInfo()
    {
        return $this->container['customInfo'];
    }

    /**
    * Sets customInfo
    *
    * @param string|null $customInfo **参数说明**：推送给设备的自定义信息。添加该升级包完成，并创建升级任务后，物联网平台向设备下发升级通知时，会下发该自定义信息给设备。 **取值范围**：长度不超过4096。
    *
    * @return $this
    */
    public function setCustomInfo($customInfo)
    {
        $this->container['customInfo'] = $customInfo;
        return $this;
    }

    /**
    * Gets createTime
    *  软固件包上传到物联网平台的时间，格式：\"yyyyMMdd'T'HHmmss'Z'\"。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 软固件包上传到物联网平台的时间，格式：\"yyyyMMdd'T'HHmmss'Z'\"。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets fileLocation
    *  fileLocation
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\FileLocation|null
    */
    public function getFileLocation()
    {
        return $this->container['fileLocation'];
    }

    /**
    * Sets fileLocation
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\FileLocation|null $fileLocation fileLocation
    *
    * @return $this
    */
    public function setFileLocation($fileLocation)
    {
        $this->container['fileLocation'] = $fileLocation;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


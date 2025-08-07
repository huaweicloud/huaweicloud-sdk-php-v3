<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MarketplaceEngineProduct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MarketplaceEngineProduct';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineId  引擎ID。
    * engineVersion  引擎版本。
    * specCode  云市场规格ID。
    * productId  云市场商品ID。
    * bpName  服务商名称。
    * bpDomainId  服务商ID。
    * instanceMode  支持的实例类型。  - Single: 单机实例 - Ha: 主备实例 - Replica: 只读实例 - All: 以上类型都支持
    * imageId  镜像ID。
    * userLicenseAgreement  用户许可。
    * agreements  许可详情列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineId' => 'string',
            'engineVersion' => 'string',
            'specCode' => 'string',
            'productId' => 'string',
            'bpName' => 'string',
            'bpDomainId' => 'string',
            'instanceMode' => 'string',
            'imageId' => 'string',
            'userLicenseAgreement' => 'string',
            'agreements' => '\HuaweiCloud\SDK\Rds\V3\Model\Agreement[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineId  引擎ID。
    * engineVersion  引擎版本。
    * specCode  云市场规格ID。
    * productId  云市场商品ID。
    * bpName  服务商名称。
    * bpDomainId  服务商ID。
    * instanceMode  支持的实例类型。  - Single: 单机实例 - Ha: 主备实例 - Replica: 只读实例 - All: 以上类型都支持
    * imageId  镜像ID。
    * userLicenseAgreement  用户许可。
    * agreements  许可详情列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineId' => null,
        'engineVersion' => null,
        'specCode' => null,
        'productId' => null,
        'bpName' => null,
        'bpDomainId' => null,
        'instanceMode' => null,
        'imageId' => null,
        'userLicenseAgreement' => null,
        'agreements' => null
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
    * engineId  引擎ID。
    * engineVersion  引擎版本。
    * specCode  云市场规格ID。
    * productId  云市场商品ID。
    * bpName  服务商名称。
    * bpDomainId  服务商ID。
    * instanceMode  支持的实例类型。  - Single: 单机实例 - Ha: 主备实例 - Replica: 只读实例 - All: 以上类型都支持
    * imageId  镜像ID。
    * userLicenseAgreement  用户许可。
    * agreements  许可详情列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineId' => 'engine_id',
            'engineVersion' => 'engine_version',
            'specCode' => 'spec_code',
            'productId' => 'product_id',
            'bpName' => 'bp_name',
            'bpDomainId' => 'bp_domain_id',
            'instanceMode' => 'instance_mode',
            'imageId' => 'image_id',
            'userLicenseAgreement' => 'user_license_agreement',
            'agreements' => 'agreements'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineId  引擎ID。
    * engineVersion  引擎版本。
    * specCode  云市场规格ID。
    * productId  云市场商品ID。
    * bpName  服务商名称。
    * bpDomainId  服务商ID。
    * instanceMode  支持的实例类型。  - Single: 单机实例 - Ha: 主备实例 - Replica: 只读实例 - All: 以上类型都支持
    * imageId  镜像ID。
    * userLicenseAgreement  用户许可。
    * agreements  许可详情列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'engineId' => 'setEngineId',
            'engineVersion' => 'setEngineVersion',
            'specCode' => 'setSpecCode',
            'productId' => 'setProductId',
            'bpName' => 'setBpName',
            'bpDomainId' => 'setBpDomainId',
            'instanceMode' => 'setInstanceMode',
            'imageId' => 'setImageId',
            'userLicenseAgreement' => 'setUserLicenseAgreement',
            'agreements' => 'setAgreements'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineId  引擎ID。
    * engineVersion  引擎版本。
    * specCode  云市场规格ID。
    * productId  云市场商品ID。
    * bpName  服务商名称。
    * bpDomainId  服务商ID。
    * instanceMode  支持的实例类型。  - Single: 单机实例 - Ha: 主备实例 - Replica: 只读实例 - All: 以上类型都支持
    * imageId  镜像ID。
    * userLicenseAgreement  用户许可。
    * agreements  许可详情列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'engineId' => 'getEngineId',
            'engineVersion' => 'getEngineVersion',
            'specCode' => 'getSpecCode',
            'productId' => 'getProductId',
            'bpName' => 'getBpName',
            'bpDomainId' => 'getBpDomainId',
            'instanceMode' => 'getInstanceMode',
            'imageId' => 'getImageId',
            'userLicenseAgreement' => 'getUserLicenseAgreement',
            'agreements' => 'getAgreements'
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
        $this->container['engineId'] = isset($data['engineId']) ? $data['engineId'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['bpName'] = isset($data['bpName']) ? $data['bpName'] : null;
        $this->container['bpDomainId'] = isset($data['bpDomainId']) ? $data['bpDomainId'] : null;
        $this->container['instanceMode'] = isset($data['instanceMode']) ? $data['instanceMode'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['userLicenseAgreement'] = isset($data['userLicenseAgreement']) ? $data['userLicenseAgreement'] : null;
        $this->container['agreements'] = isset($data['agreements']) ? $data['agreements'] : null;
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
    * Gets engineId
    *  引擎ID。
    *
    * @return string|null
    */
    public function getEngineId()
    {
        return $this->container['engineId'];
    }

    /**
    * Sets engineId
    *
    * @param string|null $engineId 引擎ID。
    *
    * @return $this
    */
    public function setEngineId($engineId)
    {
        $this->container['engineId'] = $engineId;
        return $this;
    }

    /**
    * Gets engineVersion
    *  引擎版本。
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion 引擎版本。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets specCode
    *  云市场规格ID。
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 云市场规格ID。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets productId
    *  云市场商品ID。
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
    * @param string|null $productId 云市场商品ID。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets bpName
    *  服务商名称。
    *
    * @return string|null
    */
    public function getBpName()
    {
        return $this->container['bpName'];
    }

    /**
    * Sets bpName
    *
    * @param string|null $bpName 服务商名称。
    *
    * @return $this
    */
    public function setBpName($bpName)
    {
        $this->container['bpName'] = $bpName;
        return $this;
    }

    /**
    * Gets bpDomainId
    *  服务商ID。
    *
    * @return string|null
    */
    public function getBpDomainId()
    {
        return $this->container['bpDomainId'];
    }

    /**
    * Sets bpDomainId
    *
    * @param string|null $bpDomainId 服务商ID。
    *
    * @return $this
    */
    public function setBpDomainId($bpDomainId)
    {
        $this->container['bpDomainId'] = $bpDomainId;
        return $this;
    }

    /**
    * Gets instanceMode
    *  支持的实例类型。  - Single: 单机实例 - Ha: 主备实例 - Replica: 只读实例 - All: 以上类型都支持
    *
    * @return string|null
    */
    public function getInstanceMode()
    {
        return $this->container['instanceMode'];
    }

    /**
    * Sets instanceMode
    *
    * @param string|null $instanceMode 支持的实例类型。  - Single: 单机实例 - Ha: 主备实例 - Replica: 只读实例 - All: 以上类型都支持
    *
    * @return $this
    */
    public function setInstanceMode($instanceMode)
    {
        $this->container['instanceMode'] = $instanceMode;
        return $this;
    }

    /**
    * Gets imageId
    *  镜像ID。
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 镜像ID。
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets userLicenseAgreement
    *  用户许可。
    *
    * @return string|null
    */
    public function getUserLicenseAgreement()
    {
        return $this->container['userLicenseAgreement'];
    }

    /**
    * Sets userLicenseAgreement
    *
    * @param string|null $userLicenseAgreement 用户许可。
    *
    * @return $this
    */
    public function setUserLicenseAgreement($userLicenseAgreement)
    {
        $this->container['userLicenseAgreement'] = $userLicenseAgreement;
        return $this;
    }

    /**
    * Gets agreements
    *  许可详情列表。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\Agreement[]|null
    */
    public function getAgreements()
    {
        return $this->container['agreements'];
    }

    /**
    * Sets agreements
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\Agreement[]|null $agreements 许可详情列表。
    *
    * @return $this
    */
    public function setAgreements($agreements)
    {
        $this->container['agreements'] = $agreements;
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


<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnvNodeModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnvNodeModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  环境id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * appId  组件id。
    * businessName  应用名称。
    * innerDomainId  租户id。
    * name  环境名称。
    * isDefault  是否是默认环境。
    * appName  组件名称。
    * businessId  应用id。
    * region  区域。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'gmtCreate' => '\DateTime',
            'gmtModify' => '\DateTime',
            'appId' => 'int',
            'businessName' => 'string',
            'innerDomainId' => 'int',
            'name' => 'string',
            'isDefault' => 'bool',
            'appName' => 'string',
            'businessId' => 'int',
            'region' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  环境id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * appId  组件id。
    * businessName  应用名称。
    * innerDomainId  租户id。
    * name  环境名称。
    * isDefault  是否是默认环境。
    * appName  组件名称。
    * businessId  应用id。
    * region  区域。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'gmtCreate' => 'date',
        'gmtModify' => 'date',
        'appId' => 'int64',
        'businessName' => null,
        'innerDomainId' => 'int32',
        'name' => null,
        'isDefault' => null,
        'appName' => null,
        'businessId' => 'int64',
        'region' => null
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
    * id  环境id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * appId  组件id。
    * businessName  应用名称。
    * innerDomainId  租户id。
    * name  环境名称。
    * isDefault  是否是默认环境。
    * appName  组件名称。
    * businessId  应用id。
    * region  区域。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'gmtCreate' => 'gmt_create',
            'gmtModify' => 'gmt_modify',
            'appId' => 'app_id',
            'businessName' => 'business_name',
            'innerDomainId' => 'inner_domain_id',
            'name' => 'name',
            'isDefault' => 'is_default',
            'appName' => 'app_name',
            'businessId' => 'business_id',
            'region' => 'region'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  环境id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * appId  组件id。
    * businessName  应用名称。
    * innerDomainId  租户id。
    * name  环境名称。
    * isDefault  是否是默认环境。
    * appName  组件名称。
    * businessId  应用id。
    * region  区域。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'gmtCreate' => 'setGmtCreate',
            'gmtModify' => 'setGmtModify',
            'appId' => 'setAppId',
            'businessName' => 'setBusinessName',
            'innerDomainId' => 'setInnerDomainId',
            'name' => 'setName',
            'isDefault' => 'setIsDefault',
            'appName' => 'setAppName',
            'businessId' => 'setBusinessId',
            'region' => 'setRegion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  环境id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * appId  组件id。
    * businessName  应用名称。
    * innerDomainId  租户id。
    * name  环境名称。
    * isDefault  是否是默认环境。
    * appName  组件名称。
    * businessId  应用id。
    * region  区域。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'gmtCreate' => 'getGmtCreate',
            'gmtModify' => 'getGmtModify',
            'appId' => 'getAppId',
            'businessName' => 'getBusinessName',
            'innerDomainId' => 'getInnerDomainId',
            'name' => 'getName',
            'isDefault' => 'getIsDefault',
            'appName' => 'getAppName',
            'businessId' => 'getBusinessId',
            'region' => 'getRegion'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['gmtCreate'] = isset($data['gmtCreate']) ? $data['gmtCreate'] : null;
        $this->container['gmtModify'] = isset($data['gmtModify']) ? $data['gmtModify'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['businessName'] = isset($data['businessName']) ? $data['businessName'] : null;
        $this->container['innerDomainId'] = isset($data['innerDomainId']) ? $data['innerDomainId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['businessId'] = isset($data['businessId']) ? $data['businessId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
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
    * Gets id
    *  环境id。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 环境id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets gmtCreate
    *  创建时间。
    *
    * @return \DateTime|null
    */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
    * Sets gmtCreate
    *
    * @param \DateTime|null $gmtCreate 创建时间。
    *
    * @return $this
    */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;
        return $this;
    }

    /**
    * Gets gmtModify
    *  修改时间。
    *
    * @return \DateTime|null
    */
    public function getGmtModify()
    {
        return $this->container['gmtModify'];
    }

    /**
    * Sets gmtModify
    *
    * @param \DateTime|null $gmtModify 修改时间。
    *
    * @return $this
    */
    public function setGmtModify($gmtModify)
    {
        $this->container['gmtModify'] = $gmtModify;
        return $this;
    }

    /**
    * Gets appId
    *  组件id。
    *
    * @return int|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param int|null $appId 组件id。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets businessName
    *  应用名称。
    *
    * @return string|null
    */
    public function getBusinessName()
    {
        return $this->container['businessName'];
    }

    /**
    * Sets businessName
    *
    * @param string|null $businessName 应用名称。
    *
    * @return $this
    */
    public function setBusinessName($businessName)
    {
        $this->container['businessName'] = $businessName;
        return $this;
    }

    /**
    * Gets innerDomainId
    *  租户id。
    *
    * @return int|null
    */
    public function getInnerDomainId()
    {
        return $this->container['innerDomainId'];
    }

    /**
    * Sets innerDomainId
    *
    * @param int|null $innerDomainId 租户id。
    *
    * @return $this
    */
    public function setInnerDomainId($innerDomainId)
    {
        $this->container['innerDomainId'] = $innerDomainId;
        return $this;
    }

    /**
    * Gets name
    *  环境名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 环境名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets isDefault
    *  是否是默认环境。
    *
    * @return bool|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param bool|null $isDefault 是否是默认环境。
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
        return $this;
    }

    /**
    * Gets appName
    *  组件名称。
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 组件名称。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets businessId
    *  应用id。
    *
    * @return int|null
    */
    public function getBusinessId()
    {
        return $this->container['businessId'];
    }

    /**
    * Sets businessId
    *
    * @param int|null $businessId 应用id。
    *
    * @return $this
    */
    public function setBusinessId($businessId)
    {
        $this->container['businessId'] = $businessId;
        return $this;
    }

    /**
    * Gets region
    *  区域。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
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


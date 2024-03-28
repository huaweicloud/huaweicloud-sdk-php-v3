<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDatasourceConnectionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDatasourceConnectionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  连接名称。
    * service  服务名称，目前为CloudTable.OpenTSDB/CloudTable，MRS.OPENTSDB，DWS，RDS，CSS。 说明： 大小写不敏感。
    * securityGroupId  用户指定安全组ID，即为需要建立连接的服务所在的安全组。
    * networkId  对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    * url  对应服务对外提供的访问url。长度不能超过512个字符。
    * tags  标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'service' => 'string',
            'securityGroupId' => 'string',
            'networkId' => 'string',
            'url' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dli\V1\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  连接名称。
    * service  服务名称，目前为CloudTable.OpenTSDB/CloudTable，MRS.OPENTSDB，DWS，RDS，CSS。 说明： 大小写不敏感。
    * securityGroupId  用户指定安全组ID，即为需要建立连接的服务所在的安全组。
    * networkId  对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    * url  对应服务对外提供的访问url。长度不能超过512个字符。
    * tags  标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'service' => null,
        'securityGroupId' => null,
        'networkId' => null,
        'url' => null,
        'tags' => null
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
    * name  连接名称。
    * service  服务名称，目前为CloudTable.OpenTSDB/CloudTable，MRS.OPENTSDB，DWS，RDS，CSS。 说明： 大小写不敏感。
    * securityGroupId  用户指定安全组ID，即为需要建立连接的服务所在的安全组。
    * networkId  对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    * url  对应服务对外提供的访问url。长度不能超过512个字符。
    * tags  标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'service' => 'service',
            'securityGroupId' => 'security_group_id',
            'networkId' => 'network_id',
            'url' => 'url',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  连接名称。
    * service  服务名称，目前为CloudTable.OpenTSDB/CloudTable，MRS.OPENTSDB，DWS，RDS，CSS。 说明： 大小写不敏感。
    * securityGroupId  用户指定安全组ID，即为需要建立连接的服务所在的安全组。
    * networkId  对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    * url  对应服务对外提供的访问url。长度不能超过512个字符。
    * tags  标签
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'service' => 'setService',
            'securityGroupId' => 'setSecurityGroupId',
            'networkId' => 'setNetworkId',
            'url' => 'setUrl',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  连接名称。
    * service  服务名称，目前为CloudTable.OpenTSDB/CloudTable，MRS.OPENTSDB，DWS，RDS，CSS。 说明： 大小写不敏感。
    * securityGroupId  用户指定安全组ID，即为需要建立连接的服务所在的安全组。
    * networkId  对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    * url  对应服务对外提供的访问url。长度不能超过512个字符。
    * tags  标签
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'service' => 'getService',
            'securityGroupId' => 'getSecurityGroupId',
            'networkId' => 'getNetworkId',
            'url' => 'getUrl',
            'tags' => 'getTags'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['service'] === null) {
            $invalidProperties[] = "'service' can't be null";
        }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
        if ($this->container['networkId'] === null) {
            $invalidProperties[] = "'networkId' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
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
    * Gets name
    *  连接名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 连接名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets service
    *  服务名称，目前为CloudTable.OpenTSDB/CloudTable，MRS.OPENTSDB，DWS，RDS，CSS。 说明： 大小写不敏感。
    *
    * @return string
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param string $service 服务名称，目前为CloudTable.OpenTSDB/CloudTable，MRS.OPENTSDB，DWS，RDS，CSS。 说明： 大小写不敏感。
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  用户指定安全组ID，即为需要建立连接的服务所在的安全组。
    *
    * @return string
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string $securityGroupId 用户指定安全组ID，即为需要建立连接的服务所在的安全组。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets networkId
    *  对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    *
    * @return string
    */
    public function getNetworkId()
    {
        return $this->container['networkId'];
    }

    /**
    * Sets networkId
    *
    * @param string $networkId 对应服务的子网网络ID，即为需要建立连接的服务所在的子网。
    *
    * @return $this
    */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;
        return $this;
    }

    /**
    * Gets url
    *  对应服务对外提供的访问url。长度不能超过512个字符。
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url 对应服务对外提供的访问url。长度不能超过512个字符。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets tags
    *  标签
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\Tag[]|null $tags 标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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


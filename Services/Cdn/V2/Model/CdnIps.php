<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CdnIps implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CdnIps';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ip  需查询的IP地址。
    * belongs  是否是华为云CDN节点。（true:是华为云CDN节点，false:不是华为云CDN节点）
    * region  IP归属地省份。（Unknown:表示未知归属地）
    * isp  运营商名称。如果IP归属地未知，该字段返回null。
    * platform  平台。如果IP归属地未知，该字段返回null。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ip' => 'string',
            'belongs' => 'bool',
            'region' => 'string',
            'isp' => 'string',
            'platform' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ip  需查询的IP地址。
    * belongs  是否是华为云CDN节点。（true:是华为云CDN节点，false:不是华为云CDN节点）
    * region  IP归属地省份。（Unknown:表示未知归属地）
    * isp  运营商名称。如果IP归属地未知，该字段返回null。
    * platform  平台。如果IP归属地未知，该字段返回null。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ip' => null,
        'belongs' => null,
        'region' => null,
        'isp' => null,
        'platform' => null
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
    * ip  需查询的IP地址。
    * belongs  是否是华为云CDN节点。（true:是华为云CDN节点，false:不是华为云CDN节点）
    * region  IP归属地省份。（Unknown:表示未知归属地）
    * isp  运营商名称。如果IP归属地未知，该字段返回null。
    * platform  平台。如果IP归属地未知，该字段返回null。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ip' => 'ip',
            'belongs' => 'belongs',
            'region' => 'region',
            'isp' => 'isp',
            'platform' => 'platform'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ip  需查询的IP地址。
    * belongs  是否是华为云CDN节点。（true:是华为云CDN节点，false:不是华为云CDN节点）
    * region  IP归属地省份。（Unknown:表示未知归属地）
    * isp  运营商名称。如果IP归属地未知，该字段返回null。
    * platform  平台。如果IP归属地未知，该字段返回null。
    *
    * @var string[]
    */
    protected static $setters = [
            'ip' => 'setIp',
            'belongs' => 'setBelongs',
            'region' => 'setRegion',
            'isp' => 'setIsp',
            'platform' => 'setPlatform'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ip  需查询的IP地址。
    * belongs  是否是华为云CDN节点。（true:是华为云CDN节点，false:不是华为云CDN节点）
    * region  IP归属地省份。（Unknown:表示未知归属地）
    * isp  运营商名称。如果IP归属地未知，该字段返回null。
    * platform  平台。如果IP归属地未知，该字段返回null。
    *
    * @var string[]
    */
    protected static $getters = [
            'ip' => 'getIp',
            'belongs' => 'getBelongs',
            'region' => 'getRegion',
            'isp' => 'getIsp',
            'platform' => 'getPlatform'
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
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['belongs'] = isset($data['belongs']) ? $data['belongs'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['isp'] = isset($data['isp']) ? $data['isp'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
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
    * Gets ip
    *  需查询的IP地址。
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 需查询的IP地址。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets belongs
    *  是否是华为云CDN节点。（true:是华为云CDN节点，false:不是华为云CDN节点）
    *
    * @return bool|null
    */
    public function getBelongs()
    {
        return $this->container['belongs'];
    }

    /**
    * Sets belongs
    *
    * @param bool|null $belongs 是否是华为云CDN节点。（true:是华为云CDN节点，false:不是华为云CDN节点）
    *
    * @return $this
    */
    public function setBelongs($belongs)
    {
        $this->container['belongs'] = $belongs;
        return $this;
    }

    /**
    * Gets region
    *  IP归属地省份。（Unknown:表示未知归属地）
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
    * @param string|null $region IP归属地省份。（Unknown:表示未知归属地）
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets isp
    *  运营商名称。如果IP归属地未知，该字段返回null。
    *
    * @return string|null
    */
    public function getIsp()
    {
        return $this->container['isp'];
    }

    /**
    * Sets isp
    *
    * @param string|null $isp 运营商名称。如果IP归属地未知，该字段返回null。
    *
    * @return $this
    */
    public function setIsp($isp)
    {
        $this->container['isp'] = $isp;
        return $this;
    }

    /**
    * Gets platform
    *  平台。如果IP归属地未知，该字段返回null。
    *
    * @return string|null
    */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
    * Sets platform
    *
    * @param string|null $platform 平台。如果IP归属地未知，该字段返回null。
    *
    * @return $this
    */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;
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


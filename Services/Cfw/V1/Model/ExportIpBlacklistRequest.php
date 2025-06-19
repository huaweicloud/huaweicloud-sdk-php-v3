<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportIpBlacklistRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportIpBlacklistRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID，可以从调API处获取，也可以从控制台获取。可通过[项目ID获取方式](cfw_02_0015.xml)获取
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * name  IP黑名单的名字，如果要导出生效范围为EIP的IP黑名单，就指定名字为ip-blacklist-eip.txt，如果要导出生效范围为NAT的IP黑名单，就指定名字为ip-blacklist-nat.txt。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'fwInstanceId' => 'string',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID，可以从调API处获取，也可以从控制台获取。可通过[项目ID获取方式](cfw_02_0015.xml)获取
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * name  IP黑名单的名字，如果要导出生效范围为EIP的IP黑名单，就指定名字为ip-blacklist-eip.txt，如果要导出生效范围为NAT的IP黑名单，就指定名字为ip-blacklist-nat.txt。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'fwInstanceId' => null,
        'name' => null
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
    * projectId  项目ID，可以从调API处获取，也可以从控制台获取。可通过[项目ID获取方式](cfw_02_0015.xml)获取
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * name  IP黑名单的名字，如果要导出生效范围为EIP的IP黑名单，就指定名字为ip-blacklist-eip.txt，如果要导出生效范围为NAT的IP黑名单，就指定名字为ip-blacklist-nat.txt。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'fwInstanceId' => 'fw_instance_id',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID，可以从调API处获取，也可以从控制台获取。可通过[项目ID获取方式](cfw_02_0015.xml)获取
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * name  IP黑名单的名字，如果要导出生效范围为EIP的IP黑名单，就指定名字为ip-blacklist-eip.txt，如果要导出生效范围为NAT的IP黑名单，就指定名字为ip-blacklist-nat.txt。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'fwInstanceId' => 'setFwInstanceId',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID，可以从调API处获取，也可以从控制台获取。可通过[项目ID获取方式](cfw_02_0015.xml)获取
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * name  IP黑名单的名字，如果要导出生效范围为EIP的IP黑名单，就指定名字为ip-blacklist-eip.txt，如果要导出生效范围为NAT的IP黑名单，就指定名字为ip-blacklist-nat.txt。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'fwInstanceId' => 'getFwInstanceId',
            'name' => 'getName'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['fwInstanceId'] === null) {
            $invalidProperties[] = "'fwInstanceId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets projectId
    *  项目ID，可以从调API处获取，也可以从控制台获取。可通过[项目ID获取方式](cfw_02_0015.xml)获取
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID，可以从调API处获取，也可以从控制台获取。可通过[项目ID获取方式](cfw_02_0015.xml)获取
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets fwInstanceId
    *  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    *
    * @return string
    */
    public function getFwInstanceId()
    {
        return $this->container['fwInstanceId'];
    }

    /**
    * Sets fwInstanceId
    *
    * @param string $fwInstanceId 防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
        return $this;
    }

    /**
    * Gets name
    *  IP黑名单的名字，如果要导出生效范围为EIP的IP黑名单，就指定名字为ip-blacklist-eip.txt，如果要导出生效范围为NAT的IP黑名单，就指定名字为ip-blacklist-nat.txt。
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
    * @param string $name IP黑名单的名字，如果要导出生效范围为EIP的IP黑名单，就指定名字为ip-blacklist-eip.txt，如果要导出生效范围为NAT的IP黑名单，就指定名字为ip-blacklist-nat.txt。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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


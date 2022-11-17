<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopicAttribute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopicAttribute';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  访问策略规范版本。目前只支持“2016-09-07”。
    * id  策略的唯一标识。不能为空。
    * statement  访问策略是通过Statement语句来定义的。一个访问策略可包含一条或多条Statement语句。通过Statement语句向其他用户或云服务授权对主题的操作。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'id' => 'string',
            'statement' => '\HuaweiCloud\SDK\Smn\V2\Model\Statement[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  访问策略规范版本。目前只支持“2016-09-07”。
    * id  策略的唯一标识。不能为空。
    * statement  访问策略是通过Statement语句来定义的。一个访问策略可包含一条或多条Statement语句。通过Statement语句向其他用户或云服务授权对主题的操作。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'id' => null,
        'statement' => null
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
    * version  访问策略规范版本。目前只支持“2016-09-07”。
    * id  策略的唯一标识。不能为空。
    * statement  访问策略是通过Statement语句来定义的。一个访问策略可包含一条或多条Statement语句。通过Statement语句向其他用户或云服务授权对主题的操作。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'Version',
            'id' => 'Id',
            'statement' => 'Statement'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  访问策略规范版本。目前只支持“2016-09-07”。
    * id  策略的唯一标识。不能为空。
    * statement  访问策略是通过Statement语句来定义的。一个访问策略可包含一条或多条Statement语句。通过Statement语句向其他用户或云服务授权对主题的操作。
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'id' => 'setId',
            'statement' => 'setStatement'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  访问策略规范版本。目前只支持“2016-09-07”。
    * id  策略的唯一标识。不能为空。
    * statement  访问策略是通过Statement语句来定义的。一个访问策略可包含一条或多条Statement语句。通过Statement语句向其他用户或云服务授权对主题的操作。
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'id' => 'getId',
            'statement' => 'getStatement'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['statement'] = isset($data['statement']) ? $data['statement'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['statement'] === null) {
            $invalidProperties[] = "'statement' can't be null";
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
    * Gets version
    *  访问策略规范版本。目前只支持“2016-09-07”。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 访问策略规范版本。目前只支持“2016-09-07”。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets id
    *  策略的唯一标识。不能为空。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 策略的唯一标识。不能为空。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets statement
    *  访问策略是通过Statement语句来定义的。一个访问策略可包含一条或多条Statement语句。通过Statement语句向其他用户或云服务授权对主题的操作。
    *
    * @return \HuaweiCloud\SDK\Smn\V2\Model\Statement[]
    */
    public function getStatement()
    {
        return $this->container['statement'];
    }

    /**
    * Sets statement
    *
    * @param \HuaweiCloud\SDK\Smn\V2\Model\Statement[] $statement 访问策略是通过Statement语句来定义的。一个访问策略可包含一条或多条Statement语句。通过Statement语句向其他用户或云服务授权对主题的操作。
    *
    * @return $this
    */
    public function setStatement($statement)
    {
        $this->container['statement'] = $statement;
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


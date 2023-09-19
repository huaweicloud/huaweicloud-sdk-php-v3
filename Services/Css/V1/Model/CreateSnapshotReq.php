<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSnapshotReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSnapshotReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  快照名称，快照名称在4位到64位之间，必须以字母开头，可以包含字母、数字、中划线或者下划线，注意字母不能大写且不能包含其他特殊字符。
    * description  快照描述，0～256个字符，不能包含!<>=&\\\"'字符。
    * indices  指定要备份的索引名称，多个索引用逗号隔开，默认备份所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示备份名称前缀是2018-06的所有索引的数据。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'indices' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  快照名称，快照名称在4位到64位之间，必须以字母开头，可以包含字母、数字、中划线或者下划线，注意字母不能大写且不能包含其他特殊字符。
    * description  快照描述，0～256个字符，不能包含!<>=&\\\"'字符。
    * indices  指定要备份的索引名称，多个索引用逗号隔开，默认备份所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示备份名称前缀是2018-06的所有索引的数据。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'indices' => null
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
    * name  快照名称，快照名称在4位到64位之间，必须以字母开头，可以包含字母、数字、中划线或者下划线，注意字母不能大写且不能包含其他特殊字符。
    * description  快照描述，0～256个字符，不能包含!<>=&\\\"'字符。
    * indices  指定要备份的索引名称，多个索引用逗号隔开，默认备份所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示备份名称前缀是2018-06的所有索引的数据。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'indices' => 'indices'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  快照名称，快照名称在4位到64位之间，必须以字母开头，可以包含字母、数字、中划线或者下划线，注意字母不能大写且不能包含其他特殊字符。
    * description  快照描述，0～256个字符，不能包含!<>=&\\\"'字符。
    * indices  指定要备份的索引名称，多个索引用逗号隔开，默认备份所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示备份名称前缀是2018-06的所有索引的数据。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'indices' => 'setIndices'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  快照名称，快照名称在4位到64位之间，必须以字母开头，可以包含字母、数字、中划线或者下划线，注意字母不能大写且不能包含其他特殊字符。
    * description  快照描述，0～256个字符，不能包含!<>=&\\\"'字符。
    * indices  指定要备份的索引名称，多个索引用逗号隔开，默认备份所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示备份名称前缀是2018-06的所有索引的数据。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'indices' => 'getIndices'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['indices'] = isset($data['indices']) ? $data['indices'] : null;
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
    *  快照名称，快照名称在4位到64位之间，必须以字母开头，可以包含字母、数字、中划线或者下划线，注意字母不能大写且不能包含其他特殊字符。
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
    * @param string $name 快照名称，快照名称在4位到64位之间，必须以字母开头，可以包含字母、数字、中划线或者下划线，注意字母不能大写且不能包含其他特殊字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  快照描述，0～256个字符，不能包含!<>=&\\\"'字符。
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
    * @param string|null $description 快照描述，0～256个字符，不能包含!<>=&\\\"'字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets indices
    *  指定要备份的索引名称，多个索引用逗号隔开，默认备份所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示备份名称前缀是2018-06的所有索引的数据。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。
    *
    * @return string|null
    */
    public function getIndices()
    {
        return $this->container['indices'];
    }

    /**
    * Sets indices
    *
    * @param string|null $indices 指定要备份的索引名称，多个索引用逗号隔开，默认备份所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示备份名称前缀是2018-06的所有索引的数据。  0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。
    *
    * @return $this
    */
    public function setIndices($indices)
    {
        $this->container['indices'] = $indices;
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


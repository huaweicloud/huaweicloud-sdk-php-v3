<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiBatchPublish implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiBatchPublish';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apis  需要发布或下线的API ID列表，单次更新上限为1000个API。必须指定apis或group_id。
    * envId  环境ID
    * groupId  API分组ID。必须指定apis或group_id。
    * remark  对本次发布的描述信息  字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apis' => 'string[]',
            'envId' => 'string',
            'groupId' => 'string',
            'remark' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apis  需要发布或下线的API ID列表，单次更新上限为1000个API。必须指定apis或group_id。
    * envId  环境ID
    * groupId  API分组ID。必须指定apis或group_id。
    * remark  对本次发布的描述信息  字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apis' => null,
        'envId' => null,
        'groupId' => null,
        'remark' => null
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
    * apis  需要发布或下线的API ID列表，单次更新上限为1000个API。必须指定apis或group_id。
    * envId  环境ID
    * groupId  API分组ID。必须指定apis或group_id。
    * remark  对本次发布的描述信息  字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apis' => 'apis',
            'envId' => 'env_id',
            'groupId' => 'group_id',
            'remark' => 'remark'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apis  需要发布或下线的API ID列表，单次更新上限为1000个API。必须指定apis或group_id。
    * envId  环境ID
    * groupId  API分组ID。必须指定apis或group_id。
    * remark  对本次发布的描述信息  字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @var string[]
    */
    protected static $setters = [
            'apis' => 'setApis',
            'envId' => 'setEnvId',
            'groupId' => 'setGroupId',
            'remark' => 'setRemark'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apis  需要发布或下线的API ID列表，单次更新上限为1000个API。必须指定apis或group_id。
    * envId  环境ID
    * groupId  API分组ID。必须指定apis或group_id。
    * remark  对本次发布的描述信息  字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @var string[]
    */
    protected static $getters = [
            'apis' => 'getApis',
            'envId' => 'getEnvId',
            'groupId' => 'getGroupId',
            'remark' => 'getRemark'
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
        $this->container['apis'] = isset($data['apis']) ? $data['apis'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['envId'] === null) {
            $invalidProperties[] = "'envId' can't be null";
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
    * Gets apis
    *  需要发布或下线的API ID列表，单次更新上限为1000个API。必须指定apis或group_id。
    *
    * @return string[]|null
    */
    public function getApis()
    {
        return $this->container['apis'];
    }

    /**
    * Sets apis
    *
    * @param string[]|null $apis 需要发布或下线的API ID列表，单次更新上限为1000个API。必须指定apis或group_id。
    *
    * @return $this
    */
    public function setApis($apis)
    {
        $this->container['apis'] = $apis;
        return $this;
    }

    /**
    * Gets envId
    *  环境ID
    *
    * @return string
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param string $envId 环境ID
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets groupId
    *  API分组ID。必须指定apis或group_id。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId API分组ID。必须指定apis或group_id。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets remark
    *  对本次发布的描述信息  字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 对本次发布的描述信息  字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
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


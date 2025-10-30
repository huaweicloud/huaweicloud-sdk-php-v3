<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventForensicInfoImageBlockForensic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventForensicInfo_image_block_forensic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**： 阻断类型 **取值范围**： 不涉及
    * msg  **参数解释**： 阻断原因 **取值范围**： 不涉及
    * path  **参数解释**： 路径 **取值范围**： 不涉及
    * image  **参数解释**： 镜像名称 **取值范围**： 不涉及
    * version  **参数解释**： 镜像版本 **取值范围**： 不涉及
    * result  **参数解释**： 阻断结果 **取值范围**： 不涉及
    * time  **参数解释**： 发生时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'msg' => 'string',
            'path' => 'string',
            'image' => 'string',
            'version' => 'bool',
            'result' => 'string',
            'time' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**： 阻断类型 **取值范围**： 不涉及
    * msg  **参数解释**： 阻断原因 **取值范围**： 不涉及
    * path  **参数解释**： 路径 **取值范围**： 不涉及
    * image  **参数解释**： 镜像名称 **取值范围**： 不涉及
    * version  **参数解释**： 镜像版本 **取值范围**： 不涉及
    * result  **参数解释**： 阻断结果 **取值范围**： 不涉及
    * time  **参数解释**： 发生时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'msg' => null,
        'path' => null,
        'image' => null,
        'version' => null,
        'result' => null,
        'time' => null
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
    * type  **参数解释**： 阻断类型 **取值范围**： 不涉及
    * msg  **参数解释**： 阻断原因 **取值范围**： 不涉及
    * path  **参数解释**： 路径 **取值范围**： 不涉及
    * image  **参数解释**： 镜像名称 **取值范围**： 不涉及
    * version  **参数解释**： 镜像版本 **取值范围**： 不涉及
    * result  **参数解释**： 阻断结果 **取值范围**： 不涉及
    * time  **参数解释**： 发生时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'msg' => 'msg',
            'path' => 'path',
            'image' => 'image',
            'version' => 'version',
            'result' => 'result',
            'time' => 'time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**： 阻断类型 **取值范围**： 不涉及
    * msg  **参数解释**： 阻断原因 **取值范围**： 不涉及
    * path  **参数解释**： 路径 **取值范围**： 不涉及
    * image  **参数解释**： 镜像名称 **取值范围**： 不涉及
    * version  **参数解释**： 镜像版本 **取值范围**： 不涉及
    * result  **参数解释**： 阻断结果 **取值范围**： 不涉及
    * time  **参数解释**： 发生时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'msg' => 'setMsg',
            'path' => 'setPath',
            'image' => 'setImage',
            'version' => 'setVersion',
            'result' => 'setResult',
            'time' => 'setTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**： 阻断类型 **取值范围**： 不涉及
    * msg  **参数解释**： 阻断原因 **取值范围**： 不涉及
    * path  **参数解释**： 路径 **取值范围**： 不涉及
    * image  **参数解释**： 镜像名称 **取值范围**： 不涉及
    * version  **参数解释**： 镜像版本 **取值范围**： 不涉及
    * result  **参数解释**： 阻断结果 **取值范围**： 不涉及
    * time  **参数解释**： 发生时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'msg' => 'getMsg',
            'path' => 'getPath',
            'image' => 'getImage',
            'version' => 'getVersion',
            'result' => 'getResult',
            'time' => 'getTime'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['msg'] = isset($data['msg']) ? $data['msg'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['msg']) && !preg_match("/^.*$/", $this->container['msg'])) {
                $invalidProperties[] = "invalid value for 'msg', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['path']) && !preg_match("/^.*$/", $this->container['path'])) {
                $invalidProperties[] = "invalid value for 'path', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['image']) && !preg_match("/^.*$/", $this->container['image'])) {
                $invalidProperties[] = "invalid value for 'image', must be conform to the pattern /^.*$/.";
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
    * Gets type
    *  **参数解释**： 阻断类型 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 阻断类型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets msg
    *  **参数解释**： 阻断原因 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
    * Sets msg
    *
    * @param string|null $msg **参数解释**： 阻断原因 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setMsg($msg)
    {
        $this->container['msg'] = $msg;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释**： 路径 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释**： 路径 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets image
    *  **参数解释**： 镜像名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param string|null $image **参数解释**： 镜像名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 镜像版本 **取值范围**： 不涉及
    *
    * @return bool|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param bool|null $version **参数解释**： 镜像版本 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets result
    *  **参数解释**： 阻断结果 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result **参数解释**： 阻断结果 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets time
    *  **参数解释**： 发生时间 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time **参数解释**： 发生时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
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


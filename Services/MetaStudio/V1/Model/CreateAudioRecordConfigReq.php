<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAudioRecordConfigReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAudioRecordConfigReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * obsBucketName  **参数解释**： 接收语音录制的obs桶名。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64 **默认取值**： 不涉及
    * obsEndpoint  **参数解释**： 接收语音录制的obs终端节点。 **约束限制**： 需要为obs合法终端节点。 **取值范围**： 字符长度1-64 **默认取值**： 不涉及
    * enableAudioRecord  语音录制开关
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'obsBucketName' => 'string',
            'obsEndpoint' => 'string',
            'enableAudioRecord' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * obsBucketName  **参数解释**： 接收语音录制的obs桶名。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64 **默认取值**： 不涉及
    * obsEndpoint  **参数解释**： 接收语音录制的obs终端节点。 **约束限制**： 需要为obs合法终端节点。 **取值范围**： 字符长度1-64 **默认取值**： 不涉及
    * enableAudioRecord  语音录制开关
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'obsBucketName' => null,
        'obsEndpoint' => null,
        'enableAudioRecord' => null
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
    * obsBucketName  **参数解释**： 接收语音录制的obs桶名。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64 **默认取值**： 不涉及
    * obsEndpoint  **参数解释**： 接收语音录制的obs终端节点。 **约束限制**： 需要为obs合法终端节点。 **取值范围**： 字符长度1-64 **默认取值**： 不涉及
    * enableAudioRecord  语音录制开关
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'obsBucketName' => 'obs_bucket_name',
            'obsEndpoint' => 'obs_endpoint',
            'enableAudioRecord' => 'enable_audio_record'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * obsBucketName  **参数解释**： 接收语音录制的obs桶名。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64 **默认取值**： 不涉及
    * obsEndpoint  **参数解释**： 接收语音录制的obs终端节点。 **约束限制**： 需要为obs合法终端节点。 **取值范围**： 字符长度1-64 **默认取值**： 不涉及
    * enableAudioRecord  语音录制开关
    *
    * @var string[]
    */
    protected static $setters = [
            'obsBucketName' => 'setObsBucketName',
            'obsEndpoint' => 'setObsEndpoint',
            'enableAudioRecord' => 'setEnableAudioRecord'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * obsBucketName  **参数解释**： 接收语音录制的obs桶名。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64 **默认取值**： 不涉及
    * obsEndpoint  **参数解释**： 接收语音录制的obs终端节点。 **约束限制**： 需要为obs合法终端节点。 **取值范围**： 字符长度1-64 **默认取值**： 不涉及
    * enableAudioRecord  语音录制开关
    *
    * @var string[]
    */
    protected static $getters = [
            'obsBucketName' => 'getObsBucketName',
            'obsEndpoint' => 'getObsEndpoint',
            'enableAudioRecord' => 'getEnableAudioRecord'
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
        $this->container['obsBucketName'] = isset($data['obsBucketName']) ? $data['obsBucketName'] : null;
        $this->container['obsEndpoint'] = isset($data['obsEndpoint']) ? $data['obsEndpoint'] : null;
        $this->container['enableAudioRecord'] = isset($data['enableAudioRecord']) ? $data['enableAudioRecord'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['obsBucketName'] === null) {
            $invalidProperties[] = "'obsBucketName' can't be null";
        }
            if ((mb_strlen($this->container['obsBucketName']) > 64)) {
                $invalidProperties[] = "invalid value for 'obsBucketName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['obsBucketName']) < 1)) {
                $invalidProperties[] = "invalid value for 'obsBucketName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['obsEndpoint'] === null) {
            $invalidProperties[] = "'obsEndpoint' can't be null";
        }
            if ((mb_strlen($this->container['obsEndpoint']) > 64)) {
                $invalidProperties[] = "invalid value for 'obsEndpoint', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['obsEndpoint']) < 1)) {
                $invalidProperties[] = "invalid value for 'obsEndpoint', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['enableAudioRecord'] === null) {
            $invalidProperties[] = "'enableAudioRecord' can't be null";
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
    * Gets obsBucketName
    *  **参数解释**： 接收语音录制的obs桶名。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getObsBucketName()
    {
        return $this->container['obsBucketName'];
    }

    /**
    * Sets obsBucketName
    *
    * @param string $obsBucketName **参数解释**： 接收语音录制的obs桶名。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setObsBucketName($obsBucketName)
    {
        $this->container['obsBucketName'] = $obsBucketName;
        return $this;
    }

    /**
    * Gets obsEndpoint
    *  **参数解释**： 接收语音录制的obs终端节点。 **约束限制**： 需要为obs合法终端节点。 **取值范围**： 字符长度1-64 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getObsEndpoint()
    {
        return $this->container['obsEndpoint'];
    }

    /**
    * Sets obsEndpoint
    *
    * @param string $obsEndpoint **参数解释**： 接收语音录制的obs终端节点。 **约束限制**： 需要为obs合法终端节点。 **取值范围**： 字符长度1-64 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setObsEndpoint($obsEndpoint)
    {
        $this->container['obsEndpoint'] = $obsEndpoint;
        return $this;
    }

    /**
    * Gets enableAudioRecord
    *  语音录制开关
    *
    * @return bool
    */
    public function getEnableAudioRecord()
    {
        return $this->container['enableAudioRecord'];
    }

    /**
    * Sets enableAudioRecord
    *
    * @param bool $enableAudioRecord 语音录制开关
    *
    * @return $this
    */
    public function setEnableAudioRecord($enableAudioRecord)
    {
        $this->container['enableAudioRecord'] = $enableAudioRecord;
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


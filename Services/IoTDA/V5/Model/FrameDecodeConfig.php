<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FrameDecodeConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FrameDecodeConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * frameDecodeType  **参数说明**：拆包组包规则。 **取值范围**： - DELIMITER：通过特定分隔符（如逗号、换行符等）来拆分或组合数据包。 - FIXED_LENGTH：按照固定的字节长度，对每一帧数据进行拆分或组合。 - FIELD_LENGTH：每一帧的长度可变，通过数据包中携带的长度字段信息进行拆分或组合。
    * maxFrameLength  **参数说明**：单个帧的最大长度。拆包规则为DELIMITER|FIELD_LENGTH时，该参数必选。
    * delimiter  **参数说明**：分隔符，hex string格式。拆包规则为DELIMITER，该参数必选。
    * fixedFrameLength  **参数说明**：单个帧的固定长度。拆包规则为FIXED_LENGTH，该参数必选。
    * fieldOffset  **参数说明**：指定长度字段在数据包中的起始位置（偏移量）。拆包规则为FIELD_LENGTH ，该参数必选。
    * fieldLength  **参数说明**：指定长度字段占用的字节数。拆包规则为FIELD_LENGTH，该参数必选。
    * initialBytes  **参数说明**：起始字符，hex string格式。拆包规则为FIXED_LENGTH，该参数可选。
    * adjustmentLength  **参数说明**：调整长度字段的值。拆包规则为FIELD_LENGTH，该参数可选。
    * initialBytesToStrip  **参数说明**：指定解码后从数据包中去掉的字节数。通常用于去掉长度字段，只保留数据内容。拆包规则为FIELD_LENGTH，该参数可选。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'frameDecodeType' => 'string',
            'maxFrameLength' => 'int',
            'delimiter' => 'string',
            'fixedFrameLength' => 'int',
            'fieldOffset' => 'int',
            'fieldLength' => 'int',
            'initialBytes' => 'string',
            'adjustmentLength' => 'int',
            'initialBytesToStrip' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * frameDecodeType  **参数说明**：拆包组包规则。 **取值范围**： - DELIMITER：通过特定分隔符（如逗号、换行符等）来拆分或组合数据包。 - FIXED_LENGTH：按照固定的字节长度，对每一帧数据进行拆分或组合。 - FIELD_LENGTH：每一帧的长度可变，通过数据包中携带的长度字段信息进行拆分或组合。
    * maxFrameLength  **参数说明**：单个帧的最大长度。拆包规则为DELIMITER|FIELD_LENGTH时，该参数必选。
    * delimiter  **参数说明**：分隔符，hex string格式。拆包规则为DELIMITER，该参数必选。
    * fixedFrameLength  **参数说明**：单个帧的固定长度。拆包规则为FIXED_LENGTH，该参数必选。
    * fieldOffset  **参数说明**：指定长度字段在数据包中的起始位置（偏移量）。拆包规则为FIELD_LENGTH ，该参数必选。
    * fieldLength  **参数说明**：指定长度字段占用的字节数。拆包规则为FIELD_LENGTH，该参数必选。
    * initialBytes  **参数说明**：起始字符，hex string格式。拆包规则为FIXED_LENGTH，该参数可选。
    * adjustmentLength  **参数说明**：调整长度字段的值。拆包规则为FIELD_LENGTH，该参数可选。
    * initialBytesToStrip  **参数说明**：指定解码后从数据包中去掉的字节数。通常用于去掉长度字段，只保留数据内容。拆包规则为FIELD_LENGTH，该参数可选。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'frameDecodeType' => null,
        'maxFrameLength' => 'int32',
        'delimiter' => null,
        'fixedFrameLength' => 'int32',
        'fieldOffset' => 'int32',
        'fieldLength' => 'int32',
        'initialBytes' => null,
        'adjustmentLength' => 'int32',
        'initialBytesToStrip' => 'int32'
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
    * frameDecodeType  **参数说明**：拆包组包规则。 **取值范围**： - DELIMITER：通过特定分隔符（如逗号、换行符等）来拆分或组合数据包。 - FIXED_LENGTH：按照固定的字节长度，对每一帧数据进行拆分或组合。 - FIELD_LENGTH：每一帧的长度可变，通过数据包中携带的长度字段信息进行拆分或组合。
    * maxFrameLength  **参数说明**：单个帧的最大长度。拆包规则为DELIMITER|FIELD_LENGTH时，该参数必选。
    * delimiter  **参数说明**：分隔符，hex string格式。拆包规则为DELIMITER，该参数必选。
    * fixedFrameLength  **参数说明**：单个帧的固定长度。拆包规则为FIXED_LENGTH，该参数必选。
    * fieldOffset  **参数说明**：指定长度字段在数据包中的起始位置（偏移量）。拆包规则为FIELD_LENGTH ，该参数必选。
    * fieldLength  **参数说明**：指定长度字段占用的字节数。拆包规则为FIELD_LENGTH，该参数必选。
    * initialBytes  **参数说明**：起始字符，hex string格式。拆包规则为FIXED_LENGTH，该参数可选。
    * adjustmentLength  **参数说明**：调整长度字段的值。拆包规则为FIELD_LENGTH，该参数可选。
    * initialBytesToStrip  **参数说明**：指定解码后从数据包中去掉的字节数。通常用于去掉长度字段，只保留数据内容。拆包规则为FIELD_LENGTH，该参数可选。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'frameDecodeType' => 'frame_decode_type',
            'maxFrameLength' => 'max_frame_length',
            'delimiter' => 'delimiter',
            'fixedFrameLength' => 'fixed_frame_length',
            'fieldOffset' => 'field_offset',
            'fieldLength' => 'field_length',
            'initialBytes' => 'initial_bytes',
            'adjustmentLength' => 'adjustment_length',
            'initialBytesToStrip' => 'initial_bytes_to_strip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * frameDecodeType  **参数说明**：拆包组包规则。 **取值范围**： - DELIMITER：通过特定分隔符（如逗号、换行符等）来拆分或组合数据包。 - FIXED_LENGTH：按照固定的字节长度，对每一帧数据进行拆分或组合。 - FIELD_LENGTH：每一帧的长度可变，通过数据包中携带的长度字段信息进行拆分或组合。
    * maxFrameLength  **参数说明**：单个帧的最大长度。拆包规则为DELIMITER|FIELD_LENGTH时，该参数必选。
    * delimiter  **参数说明**：分隔符，hex string格式。拆包规则为DELIMITER，该参数必选。
    * fixedFrameLength  **参数说明**：单个帧的固定长度。拆包规则为FIXED_LENGTH，该参数必选。
    * fieldOffset  **参数说明**：指定长度字段在数据包中的起始位置（偏移量）。拆包规则为FIELD_LENGTH ，该参数必选。
    * fieldLength  **参数说明**：指定长度字段占用的字节数。拆包规则为FIELD_LENGTH，该参数必选。
    * initialBytes  **参数说明**：起始字符，hex string格式。拆包规则为FIXED_LENGTH，该参数可选。
    * adjustmentLength  **参数说明**：调整长度字段的值。拆包规则为FIELD_LENGTH，该参数可选。
    * initialBytesToStrip  **参数说明**：指定解码后从数据包中去掉的字节数。通常用于去掉长度字段，只保留数据内容。拆包规则为FIELD_LENGTH，该参数可选。
    *
    * @var string[]
    */
    protected static $setters = [
            'frameDecodeType' => 'setFrameDecodeType',
            'maxFrameLength' => 'setMaxFrameLength',
            'delimiter' => 'setDelimiter',
            'fixedFrameLength' => 'setFixedFrameLength',
            'fieldOffset' => 'setFieldOffset',
            'fieldLength' => 'setFieldLength',
            'initialBytes' => 'setInitialBytes',
            'adjustmentLength' => 'setAdjustmentLength',
            'initialBytesToStrip' => 'setInitialBytesToStrip'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * frameDecodeType  **参数说明**：拆包组包规则。 **取值范围**： - DELIMITER：通过特定分隔符（如逗号、换行符等）来拆分或组合数据包。 - FIXED_LENGTH：按照固定的字节长度，对每一帧数据进行拆分或组合。 - FIELD_LENGTH：每一帧的长度可变，通过数据包中携带的长度字段信息进行拆分或组合。
    * maxFrameLength  **参数说明**：单个帧的最大长度。拆包规则为DELIMITER|FIELD_LENGTH时，该参数必选。
    * delimiter  **参数说明**：分隔符，hex string格式。拆包规则为DELIMITER，该参数必选。
    * fixedFrameLength  **参数说明**：单个帧的固定长度。拆包规则为FIXED_LENGTH，该参数必选。
    * fieldOffset  **参数说明**：指定长度字段在数据包中的起始位置（偏移量）。拆包规则为FIELD_LENGTH ，该参数必选。
    * fieldLength  **参数说明**：指定长度字段占用的字节数。拆包规则为FIELD_LENGTH，该参数必选。
    * initialBytes  **参数说明**：起始字符，hex string格式。拆包规则为FIXED_LENGTH，该参数可选。
    * adjustmentLength  **参数说明**：调整长度字段的值。拆包规则为FIELD_LENGTH，该参数可选。
    * initialBytesToStrip  **参数说明**：指定解码后从数据包中去掉的字节数。通常用于去掉长度字段，只保留数据内容。拆包规则为FIELD_LENGTH，该参数可选。
    *
    * @var string[]
    */
    protected static $getters = [
            'frameDecodeType' => 'getFrameDecodeType',
            'maxFrameLength' => 'getMaxFrameLength',
            'delimiter' => 'getDelimiter',
            'fixedFrameLength' => 'getFixedFrameLength',
            'fieldOffset' => 'getFieldOffset',
            'fieldLength' => 'getFieldLength',
            'initialBytes' => 'getInitialBytes',
            'adjustmentLength' => 'getAdjustmentLength',
            'initialBytesToStrip' => 'getInitialBytesToStrip'
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
        $this->container['frameDecodeType'] = isset($data['frameDecodeType']) ? $data['frameDecodeType'] : null;
        $this->container['maxFrameLength'] = isset($data['maxFrameLength']) ? $data['maxFrameLength'] : null;
        $this->container['delimiter'] = isset($data['delimiter']) ? $data['delimiter'] : null;
        $this->container['fixedFrameLength'] = isset($data['fixedFrameLength']) ? $data['fixedFrameLength'] : null;
        $this->container['fieldOffset'] = isset($data['fieldOffset']) ? $data['fieldOffset'] : null;
        $this->container['fieldLength'] = isset($data['fieldLength']) ? $data['fieldLength'] : null;
        $this->container['initialBytes'] = isset($data['initialBytes']) ? $data['initialBytes'] : null;
        $this->container['adjustmentLength'] = isset($data['adjustmentLength']) ? $data['adjustmentLength'] : null;
        $this->container['initialBytesToStrip'] = isset($data['initialBytesToStrip']) ? $data['initialBytesToStrip'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['frameDecodeType']) && !preg_match("/(DELIMITER|FIXED_LENGTH|FIELD_LENGTH)/", $this->container['frameDecodeType'])) {
                $invalidProperties[] = "invalid value for 'frameDecodeType', must be conform to the pattern /(DELIMITER|FIXED_LENGTH|FIELD_LENGTH)/.";
            }
            if (!is_null($this->container['maxFrameLength']) && ($this->container['maxFrameLength'] > 65535)) {
                $invalidProperties[] = "invalid value for 'maxFrameLength', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['maxFrameLength']) && ($this->container['maxFrameLength'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxFrameLength', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['delimiter']) && !preg_match("/^[0-9a-fA-F]+$/", $this->container['delimiter'])) {
                $invalidProperties[] = "invalid value for 'delimiter', must be conform to the pattern /^[0-9a-fA-F]+$/.";
            }
            if (!is_null($this->container['fixedFrameLength']) && ($this->container['fixedFrameLength'] > 65535)) {
                $invalidProperties[] = "invalid value for 'fixedFrameLength', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['fixedFrameLength']) && ($this->container['fixedFrameLength'] < 0)) {
                $invalidProperties[] = "invalid value for 'fixedFrameLength', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fieldOffset']) && ($this->container['fieldOffset'] > 65535)) {
                $invalidProperties[] = "invalid value for 'fieldOffset', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['fieldOffset']) && ($this->container['fieldOffset'] < 0)) {
                $invalidProperties[] = "invalid value for 'fieldOffset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fieldLength']) && ($this->container['fieldLength'] > 8)) {
                $invalidProperties[] = "invalid value for 'fieldLength', must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['fieldLength']) && ($this->container['fieldLength'] < 1)) {
                $invalidProperties[] = "invalid value for 'fieldLength', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['initialBytes']) && !preg_match("/^[0-9a-fA-F]+$/", $this->container['initialBytes'])) {
                $invalidProperties[] = "invalid value for 'initialBytes', must be conform to the pattern /^[0-9a-fA-F]+$/.";
            }
            if (!is_null($this->container['adjustmentLength']) && ($this->container['adjustmentLength'] > 1024)) {
                $invalidProperties[] = "invalid value for 'adjustmentLength', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['adjustmentLength']) && ($this->container['adjustmentLength'] < -1024)) {
                $invalidProperties[] = "invalid value for 'adjustmentLength', must be bigger than or equal to -1024.";
            }
            if (!is_null($this->container['initialBytesToStrip']) && ($this->container['initialBytesToStrip'] > 65535)) {
                $invalidProperties[] = "invalid value for 'initialBytesToStrip', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['initialBytesToStrip']) && ($this->container['initialBytesToStrip'] < 0)) {
                $invalidProperties[] = "invalid value for 'initialBytesToStrip', must be bigger than or equal to 0.";
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
    * Gets frameDecodeType
    *  **参数说明**：拆包组包规则。 **取值范围**： - DELIMITER：通过特定分隔符（如逗号、换行符等）来拆分或组合数据包。 - FIXED_LENGTH：按照固定的字节长度，对每一帧数据进行拆分或组合。 - FIELD_LENGTH：每一帧的长度可变，通过数据包中携带的长度字段信息进行拆分或组合。
    *
    * @return string|null
    */
    public function getFrameDecodeType()
    {
        return $this->container['frameDecodeType'];
    }

    /**
    * Sets frameDecodeType
    *
    * @param string|null $frameDecodeType **参数说明**：拆包组包规则。 **取值范围**： - DELIMITER：通过特定分隔符（如逗号、换行符等）来拆分或组合数据包。 - FIXED_LENGTH：按照固定的字节长度，对每一帧数据进行拆分或组合。 - FIELD_LENGTH：每一帧的长度可变，通过数据包中携带的长度字段信息进行拆分或组合。
    *
    * @return $this
    */
    public function setFrameDecodeType($frameDecodeType)
    {
        $this->container['frameDecodeType'] = $frameDecodeType;
        return $this;
    }

    /**
    * Gets maxFrameLength
    *  **参数说明**：单个帧的最大长度。拆包规则为DELIMITER|FIELD_LENGTH时，该参数必选。
    *
    * @return int|null
    */
    public function getMaxFrameLength()
    {
        return $this->container['maxFrameLength'];
    }

    /**
    * Sets maxFrameLength
    *
    * @param int|null $maxFrameLength **参数说明**：单个帧的最大长度。拆包规则为DELIMITER|FIELD_LENGTH时，该参数必选。
    *
    * @return $this
    */
    public function setMaxFrameLength($maxFrameLength)
    {
        $this->container['maxFrameLength'] = $maxFrameLength;
        return $this;
    }

    /**
    * Gets delimiter
    *  **参数说明**：分隔符，hex string格式。拆包规则为DELIMITER，该参数必选。
    *
    * @return string|null
    */
    public function getDelimiter()
    {
        return $this->container['delimiter'];
    }

    /**
    * Sets delimiter
    *
    * @param string|null $delimiter **参数说明**：分隔符，hex string格式。拆包规则为DELIMITER，该参数必选。
    *
    * @return $this
    */
    public function setDelimiter($delimiter)
    {
        $this->container['delimiter'] = $delimiter;
        return $this;
    }

    /**
    * Gets fixedFrameLength
    *  **参数说明**：单个帧的固定长度。拆包规则为FIXED_LENGTH，该参数必选。
    *
    * @return int|null
    */
    public function getFixedFrameLength()
    {
        return $this->container['fixedFrameLength'];
    }

    /**
    * Sets fixedFrameLength
    *
    * @param int|null $fixedFrameLength **参数说明**：单个帧的固定长度。拆包规则为FIXED_LENGTH，该参数必选。
    *
    * @return $this
    */
    public function setFixedFrameLength($fixedFrameLength)
    {
        $this->container['fixedFrameLength'] = $fixedFrameLength;
        return $this;
    }

    /**
    * Gets fieldOffset
    *  **参数说明**：指定长度字段在数据包中的起始位置（偏移量）。拆包规则为FIELD_LENGTH ，该参数必选。
    *
    * @return int|null
    */
    public function getFieldOffset()
    {
        return $this->container['fieldOffset'];
    }

    /**
    * Sets fieldOffset
    *
    * @param int|null $fieldOffset **参数说明**：指定长度字段在数据包中的起始位置（偏移量）。拆包规则为FIELD_LENGTH ，该参数必选。
    *
    * @return $this
    */
    public function setFieldOffset($fieldOffset)
    {
        $this->container['fieldOffset'] = $fieldOffset;
        return $this;
    }

    /**
    * Gets fieldLength
    *  **参数说明**：指定长度字段占用的字节数。拆包规则为FIELD_LENGTH，该参数必选。
    *
    * @return int|null
    */
    public function getFieldLength()
    {
        return $this->container['fieldLength'];
    }

    /**
    * Sets fieldLength
    *
    * @param int|null $fieldLength **参数说明**：指定长度字段占用的字节数。拆包规则为FIELD_LENGTH，该参数必选。
    *
    * @return $this
    */
    public function setFieldLength($fieldLength)
    {
        $this->container['fieldLength'] = $fieldLength;
        return $this;
    }

    /**
    * Gets initialBytes
    *  **参数说明**：起始字符，hex string格式。拆包规则为FIXED_LENGTH，该参数可选。
    *
    * @return string|null
    */
    public function getInitialBytes()
    {
        return $this->container['initialBytes'];
    }

    /**
    * Sets initialBytes
    *
    * @param string|null $initialBytes **参数说明**：起始字符，hex string格式。拆包规则为FIXED_LENGTH，该参数可选。
    *
    * @return $this
    */
    public function setInitialBytes($initialBytes)
    {
        $this->container['initialBytes'] = $initialBytes;
        return $this;
    }

    /**
    * Gets adjustmentLength
    *  **参数说明**：调整长度字段的值。拆包规则为FIELD_LENGTH，该参数可选。
    *
    * @return int|null
    */
    public function getAdjustmentLength()
    {
        return $this->container['adjustmentLength'];
    }

    /**
    * Sets adjustmentLength
    *
    * @param int|null $adjustmentLength **参数说明**：调整长度字段的值。拆包规则为FIELD_LENGTH，该参数可选。
    *
    * @return $this
    */
    public function setAdjustmentLength($adjustmentLength)
    {
        $this->container['adjustmentLength'] = $adjustmentLength;
        return $this;
    }

    /**
    * Gets initialBytesToStrip
    *  **参数说明**：指定解码后从数据包中去掉的字节数。通常用于去掉长度字段，只保留数据内容。拆包规则为FIELD_LENGTH，该参数可选。
    *
    * @return int|null
    */
    public function getInitialBytesToStrip()
    {
        return $this->container['initialBytesToStrip'];
    }

    /**
    * Sets initialBytesToStrip
    *
    * @param int|null $initialBytesToStrip **参数说明**：指定解码后从数据包中去掉的字节数。通常用于去掉长度字段，只保留数据内容。拆包规则为FIELD_LENGTH，该参数可选。
    *
    * @return $this
    */
    public function setInitialBytesToStrip($initialBytesToStrip)
    {
        $this->container['initialBytesToStrip'] = $initialBytesToStrip;
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


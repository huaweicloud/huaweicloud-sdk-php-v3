<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PositionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PositionDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * baseSha  **参数解释：** 基础sha值。
    * startSha  **参数解释：** 起始sha值。
    * headSha  **参数解释：** 最新sha值。
    * oldPath  **参数解释：** 文件旧路径。
    * newPath  **参数解释：** 文件新路径。
    * positionType  **参数解释：** 文件类型。
    * oldLine  **参数解释：** 旧文件行号。
    * newLine  **参数解释：** 新文件行号。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'baseSha' => 'string',
            'startSha' => 'string',
            'headSha' => 'string',
            'oldPath' => 'string',
            'newPath' => 'string',
            'positionType' => 'string',
            'oldLine' => 'int',
            'newLine' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * baseSha  **参数解释：** 基础sha值。
    * startSha  **参数解释：** 起始sha值。
    * headSha  **参数解释：** 最新sha值。
    * oldPath  **参数解释：** 文件旧路径。
    * newPath  **参数解释：** 文件新路径。
    * positionType  **参数解释：** 文件类型。
    * oldLine  **参数解释：** 旧文件行号。
    * newLine  **参数解释：** 新文件行号。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'baseSha' => null,
        'startSha' => null,
        'headSha' => null,
        'oldPath' => null,
        'newPath' => null,
        'positionType' => null,
        'oldLine' => 'int32',
        'newLine' => 'int32'
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
    * baseSha  **参数解释：** 基础sha值。
    * startSha  **参数解释：** 起始sha值。
    * headSha  **参数解释：** 最新sha值。
    * oldPath  **参数解释：** 文件旧路径。
    * newPath  **参数解释：** 文件新路径。
    * positionType  **参数解释：** 文件类型。
    * oldLine  **参数解释：** 旧文件行号。
    * newLine  **参数解释：** 新文件行号。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'baseSha' => 'base_sha',
            'startSha' => 'start_sha',
            'headSha' => 'head_sha',
            'oldPath' => 'old_path',
            'newPath' => 'new_path',
            'positionType' => 'position_type',
            'oldLine' => 'old_line',
            'newLine' => 'new_line'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * baseSha  **参数解释：** 基础sha值。
    * startSha  **参数解释：** 起始sha值。
    * headSha  **参数解释：** 最新sha值。
    * oldPath  **参数解释：** 文件旧路径。
    * newPath  **参数解释：** 文件新路径。
    * positionType  **参数解释：** 文件类型。
    * oldLine  **参数解释：** 旧文件行号。
    * newLine  **参数解释：** 新文件行号。
    *
    * @var string[]
    */
    protected static $setters = [
            'baseSha' => 'setBaseSha',
            'startSha' => 'setStartSha',
            'headSha' => 'setHeadSha',
            'oldPath' => 'setOldPath',
            'newPath' => 'setNewPath',
            'positionType' => 'setPositionType',
            'oldLine' => 'setOldLine',
            'newLine' => 'setNewLine'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * baseSha  **参数解释：** 基础sha值。
    * startSha  **参数解释：** 起始sha值。
    * headSha  **参数解释：** 最新sha值。
    * oldPath  **参数解释：** 文件旧路径。
    * newPath  **参数解释：** 文件新路径。
    * positionType  **参数解释：** 文件类型。
    * oldLine  **参数解释：** 旧文件行号。
    * newLine  **参数解释：** 新文件行号。
    *
    * @var string[]
    */
    protected static $getters = [
            'baseSha' => 'getBaseSha',
            'startSha' => 'getStartSha',
            'headSha' => 'getHeadSha',
            'oldPath' => 'getOldPath',
            'newPath' => 'getNewPath',
            'positionType' => 'getPositionType',
            'oldLine' => 'getOldLine',
            'newLine' => 'getNewLine'
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
        $this->container['baseSha'] = isset($data['baseSha']) ? $data['baseSha'] : null;
        $this->container['startSha'] = isset($data['startSha']) ? $data['startSha'] : null;
        $this->container['headSha'] = isset($data['headSha']) ? $data['headSha'] : null;
        $this->container['oldPath'] = isset($data['oldPath']) ? $data['oldPath'] : null;
        $this->container['newPath'] = isset($data['newPath']) ? $data['newPath'] : null;
        $this->container['positionType'] = isset($data['positionType']) ? $data['positionType'] : null;
        $this->container['oldLine'] = isset($data['oldLine']) ? $data['oldLine'] : null;
        $this->container['newLine'] = isset($data['newLine']) ? $data['newLine'] : null;
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
    * Gets baseSha
    *  **参数解释：** 基础sha值。
    *
    * @return string|null
    */
    public function getBaseSha()
    {
        return $this->container['baseSha'];
    }

    /**
    * Sets baseSha
    *
    * @param string|null $baseSha **参数解释：** 基础sha值。
    *
    * @return $this
    */
    public function setBaseSha($baseSha)
    {
        $this->container['baseSha'] = $baseSha;
        return $this;
    }

    /**
    * Gets startSha
    *  **参数解释：** 起始sha值。
    *
    * @return string|null
    */
    public function getStartSha()
    {
        return $this->container['startSha'];
    }

    /**
    * Sets startSha
    *
    * @param string|null $startSha **参数解释：** 起始sha值。
    *
    * @return $this
    */
    public function setStartSha($startSha)
    {
        $this->container['startSha'] = $startSha;
        return $this;
    }

    /**
    * Gets headSha
    *  **参数解释：** 最新sha值。
    *
    * @return string|null
    */
    public function getHeadSha()
    {
        return $this->container['headSha'];
    }

    /**
    * Sets headSha
    *
    * @param string|null $headSha **参数解释：** 最新sha值。
    *
    * @return $this
    */
    public function setHeadSha($headSha)
    {
        $this->container['headSha'] = $headSha;
        return $this;
    }

    /**
    * Gets oldPath
    *  **参数解释：** 文件旧路径。
    *
    * @return string|null
    */
    public function getOldPath()
    {
        return $this->container['oldPath'];
    }

    /**
    * Sets oldPath
    *
    * @param string|null $oldPath **参数解释：** 文件旧路径。
    *
    * @return $this
    */
    public function setOldPath($oldPath)
    {
        $this->container['oldPath'] = $oldPath;
        return $this;
    }

    /**
    * Gets newPath
    *  **参数解释：** 文件新路径。
    *
    * @return string|null
    */
    public function getNewPath()
    {
        return $this->container['newPath'];
    }

    /**
    * Sets newPath
    *
    * @param string|null $newPath **参数解释：** 文件新路径。
    *
    * @return $this
    */
    public function setNewPath($newPath)
    {
        $this->container['newPath'] = $newPath;
        return $this;
    }

    /**
    * Gets positionType
    *  **参数解释：** 文件类型。
    *
    * @return string|null
    */
    public function getPositionType()
    {
        return $this->container['positionType'];
    }

    /**
    * Sets positionType
    *
    * @param string|null $positionType **参数解释：** 文件类型。
    *
    * @return $this
    */
    public function setPositionType($positionType)
    {
        $this->container['positionType'] = $positionType;
        return $this;
    }

    /**
    * Gets oldLine
    *  **参数解释：** 旧文件行号。
    *
    * @return int|null
    */
    public function getOldLine()
    {
        return $this->container['oldLine'];
    }

    /**
    * Sets oldLine
    *
    * @param int|null $oldLine **参数解释：** 旧文件行号。
    *
    * @return $this
    */
    public function setOldLine($oldLine)
    {
        $this->container['oldLine'] = $oldLine;
        return $this;
    }

    /**
    * Gets newLine
    *  **参数解释：** 新文件行号。
    *
    * @return int|null
    */
    public function getNewLine()
    {
        return $this->container['newLine'];
    }

    /**
    * Sets newLine
    *
    * @param int|null $newLine **参数解释：** 新文件行号。
    *
    * @return $this
    */
    public function setNewLine($newLine)
    {
        $this->container['newLine'] = $newLine;
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


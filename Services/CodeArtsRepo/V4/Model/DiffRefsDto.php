<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiffRefsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiffRefsDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * baseSha  **参数解释：** 目标分支的基准提交哈希。 **取值范围：** 不涉及。
    * headSha  **参数解释：** 源分支的最新提交哈希。 **取值范围：** 不涉及。
    * startSha  **参数解释：** 合并请求开始时的提交哈希，通常与base_sha相同。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'baseSha' => 'string',
            'headSha' => 'string',
            'startSha' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * baseSha  **参数解释：** 目标分支的基准提交哈希。 **取值范围：** 不涉及。
    * headSha  **参数解释：** 源分支的最新提交哈希。 **取值范围：** 不涉及。
    * startSha  **参数解释：** 合并请求开始时的提交哈希，通常与base_sha相同。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'baseSha' => null,
        'headSha' => null,
        'startSha' => null
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
    * baseSha  **参数解释：** 目标分支的基准提交哈希。 **取值范围：** 不涉及。
    * headSha  **参数解释：** 源分支的最新提交哈希。 **取值范围：** 不涉及。
    * startSha  **参数解释：** 合并请求开始时的提交哈希，通常与base_sha相同。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'baseSha' => 'base_sha',
            'headSha' => 'head_sha',
            'startSha' => 'start_sha'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * baseSha  **参数解释：** 目标分支的基准提交哈希。 **取值范围：** 不涉及。
    * headSha  **参数解释：** 源分支的最新提交哈希。 **取值范围：** 不涉及。
    * startSha  **参数解释：** 合并请求开始时的提交哈希，通常与base_sha相同。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'baseSha' => 'setBaseSha',
            'headSha' => 'setHeadSha',
            'startSha' => 'setStartSha'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * baseSha  **参数解释：** 目标分支的基准提交哈希。 **取值范围：** 不涉及。
    * headSha  **参数解释：** 源分支的最新提交哈希。 **取值范围：** 不涉及。
    * startSha  **参数解释：** 合并请求开始时的提交哈希，通常与base_sha相同。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'baseSha' => 'getBaseSha',
            'headSha' => 'getHeadSha',
            'startSha' => 'getStartSha'
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
        $this->container['headSha'] = isset($data['headSha']) ? $data['headSha'] : null;
        $this->container['startSha'] = isset($data['startSha']) ? $data['startSha'] : null;
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
    *  **参数解释：** 目标分支的基准提交哈希。 **取值范围：** 不涉及。
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
    * @param string|null $baseSha **参数解释：** 目标分支的基准提交哈希。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setBaseSha($baseSha)
    {
        $this->container['baseSha'] = $baseSha;
        return $this;
    }

    /**
    * Gets headSha
    *  **参数解释：** 源分支的最新提交哈希。 **取值范围：** 不涉及。
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
    * @param string|null $headSha **参数解释：** 源分支的最新提交哈希。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setHeadSha($headSha)
    {
        $this->container['headSha'] = $headSha;
        return $this;
    }

    /**
    * Gets startSha
    *  **参数解释：** 合并请求开始时的提交哈希，通常与base_sha相同。 **取值范围：** 不涉及。
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
    * @param string|null $startSha **参数解释：** 合并请求开始时的提交哈希，通常与base_sha相同。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setStartSha($startSha)
    {
        $this->container['startSha'] = $startSha;
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


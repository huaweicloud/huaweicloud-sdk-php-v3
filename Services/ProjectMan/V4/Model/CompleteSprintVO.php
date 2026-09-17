<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompleteSprintVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompleteSprintVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operate  **参数解释**： 操作类型。 **约束限制**： 不涉及。 **取值范围**： - start：开始发布/迭代计划 - complete：完成发布/迭代计划 - reset：将计划状态设置为\"未开始\" - restart：重新开始发布/迭代计划 - move：将工作项移动到其他迭代 **默认取值**： 不涉及。
    * moveToSprintId  **参数解释**： 将工作项移动到指定迭代ID。operate参数值为complete时，需要将未完成的工作项移动到其他迭代。 **约束限制**： operate参数值为complete时需填写。空字符串表示将工作项移动到\"待规划\"。 **取值范围**： 长度为18~19个字符的数字字符串。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operate' => 'string',
            'moveToSprintId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operate  **参数解释**： 操作类型。 **约束限制**： 不涉及。 **取值范围**： - start：开始发布/迭代计划 - complete：完成发布/迭代计划 - reset：将计划状态设置为\"未开始\" - restart：重新开始发布/迭代计划 - move：将工作项移动到其他迭代 **默认取值**： 不涉及。
    * moveToSprintId  **参数解释**： 将工作项移动到指定迭代ID。operate参数值为complete时，需要将未完成的工作项移动到其他迭代。 **约束限制**： operate参数值为complete时需填写。空字符串表示将工作项移动到\"待规划\"。 **取值范围**： 长度为18~19个字符的数字字符串。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operate' => null,
        'moveToSprintId' => null
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
    * operate  **参数解释**： 操作类型。 **约束限制**： 不涉及。 **取值范围**： - start：开始发布/迭代计划 - complete：完成发布/迭代计划 - reset：将计划状态设置为\"未开始\" - restart：重新开始发布/迭代计划 - move：将工作项移动到其他迭代 **默认取值**： 不涉及。
    * moveToSprintId  **参数解释**： 将工作项移动到指定迭代ID。operate参数值为complete时，需要将未完成的工作项移动到其他迭代。 **约束限制**： operate参数值为complete时需填写。空字符串表示将工作项移动到\"待规划\"。 **取值范围**： 长度为18~19个字符的数字字符串。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operate' => 'operate',
            'moveToSprintId' => 'move_to_sprint_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operate  **参数解释**： 操作类型。 **约束限制**： 不涉及。 **取值范围**： - start：开始发布/迭代计划 - complete：完成发布/迭代计划 - reset：将计划状态设置为\"未开始\" - restart：重新开始发布/迭代计划 - move：将工作项移动到其他迭代 **默认取值**： 不涉及。
    * moveToSprintId  **参数解释**： 将工作项移动到指定迭代ID。operate参数值为complete时，需要将未完成的工作项移动到其他迭代。 **约束限制**： operate参数值为complete时需填写。空字符串表示将工作项移动到\"待规划\"。 **取值范围**： 长度为18~19个字符的数字字符串。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'operate' => 'setOperate',
            'moveToSprintId' => 'setMoveToSprintId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operate  **参数解释**： 操作类型。 **约束限制**： 不涉及。 **取值范围**： - start：开始发布/迭代计划 - complete：完成发布/迭代计划 - reset：将计划状态设置为\"未开始\" - restart：重新开始发布/迭代计划 - move：将工作项移动到其他迭代 **默认取值**： 不涉及。
    * moveToSprintId  **参数解释**： 将工作项移动到指定迭代ID。operate参数值为complete时，需要将未完成的工作项移动到其他迭代。 **约束限制**： operate参数值为complete时需填写。空字符串表示将工作项移动到\"待规划\"。 **取值范围**： 长度为18~19个字符的数字字符串。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'operate' => 'getOperate',
            'moveToSprintId' => 'getMoveToSprintId'
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
        $this->container['operate'] = isset($data['operate']) ? $data['operate'] : null;
        $this->container['moveToSprintId'] = isset($data['moveToSprintId']) ? $data['moveToSprintId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['operate'] === null) {
            $invalidProperties[] = "'operate' can't be null";
        }
            if ((mb_strlen($this->container['operate']) > 32)) {
                $invalidProperties[] = "invalid value for 'operate', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['operate']) < 0)) {
                $invalidProperties[] = "invalid value for 'operate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['moveToSprintId']) && (mb_strlen($this->container['moveToSprintId']) > 32)) {
                $invalidProperties[] = "invalid value for 'moveToSprintId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['moveToSprintId']) && (mb_strlen($this->container['moveToSprintId']) < 0)) {
                $invalidProperties[] = "invalid value for 'moveToSprintId', the character length must be bigger than or equal to 0.";
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
    * Gets operate
    *  **参数解释**： 操作类型。 **约束限制**： 不涉及。 **取值范围**： - start：开始发布/迭代计划 - complete：完成发布/迭代计划 - reset：将计划状态设置为\"未开始\" - restart：重新开始发布/迭代计划 - move：将工作项移动到其他迭代 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getOperate()
    {
        return $this->container['operate'];
    }

    /**
    * Sets operate
    *
    * @param string $operate **参数解释**： 操作类型。 **约束限制**： 不涉及。 **取值范围**： - start：开始发布/迭代计划 - complete：完成发布/迭代计划 - reset：将计划状态设置为\"未开始\" - restart：重新开始发布/迭代计划 - move：将工作项移动到其他迭代 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setOperate($operate)
    {
        $this->container['operate'] = $operate;
        return $this;
    }

    /**
    * Gets moveToSprintId
    *  **参数解释**： 将工作项移动到指定迭代ID。operate参数值为complete时，需要将未完成的工作项移动到其他迭代。 **约束限制**： operate参数值为complete时需填写。空字符串表示将工作项移动到\"待规划\"。 **取值范围**： 长度为18~19个字符的数字字符串。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMoveToSprintId()
    {
        return $this->container['moveToSprintId'];
    }

    /**
    * Sets moveToSprintId
    *
    * @param string|null $moveToSprintId **参数解释**： 将工作项移动到指定迭代ID。operate参数值为complete时，需要将未完成的工作项移动到其他迭代。 **约束限制**： operate参数值为complete时需填写。空字符串表示将工作项移动到\"待规划\"。 **取值范围**： 长度为18~19个字符的数字字符串。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMoveToSprintId($moveToSprintId)
    {
        $this->container['moveToSprintId'] = $moveToSprintId;
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


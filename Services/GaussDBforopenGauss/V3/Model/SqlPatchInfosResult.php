<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlPatchInfosResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlPatchInfosResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * patchName  **参数解释**: Patch名称。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: unique_sql_id，标识SQL文本的ID。 **取值范围**: 不涉及。
    * enabled  **参数解释**: Patch是否生效。 **取值范围**: - true：生效 - false：不生效
    * patchStatus  **参数解释**: Patch的状态。d表示SQL ID模式，h表示SQL Hash模式。 **取值范围**: - d：SQL ID模式 - h：SQL Hash模式
    * abortPatch  **参数解释**: 是否为Abort Patch。 **取值范围**: - true：是 - false：否
    * hint  **参数解释**: Patch内容（Hint文本）。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: SQL Patch所属的节点。主备版为主DN，分布式版为CN。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'patchName' => 'string',
            'sqlId' => 'string',
            'enabled' => 'bool',
            'patchStatus' => 'string',
            'abortPatch' => 'bool',
            'hint' => 'string',
            'sqlText' => 'string',
            'nodeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * patchName  **参数解释**: Patch名称。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: unique_sql_id，标识SQL文本的ID。 **取值范围**: 不涉及。
    * enabled  **参数解释**: Patch是否生效。 **取值范围**: - true：生效 - false：不生效
    * patchStatus  **参数解释**: Patch的状态。d表示SQL ID模式，h表示SQL Hash模式。 **取值范围**: - d：SQL ID模式 - h：SQL Hash模式
    * abortPatch  **参数解释**: 是否为Abort Patch。 **取值范围**: - true：是 - false：否
    * hint  **参数解释**: Patch内容（Hint文本）。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: SQL Patch所属的节点。主备版为主DN，分布式版为CN。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'patchName' => null,
        'sqlId' => null,
        'enabled' => null,
        'patchStatus' => null,
        'abortPatch' => null,
        'hint' => null,
        'sqlText' => null,
        'nodeId' => null
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
    * patchName  **参数解释**: Patch名称。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: unique_sql_id，标识SQL文本的ID。 **取值范围**: 不涉及。
    * enabled  **参数解释**: Patch是否生效。 **取值范围**: - true：生效 - false：不生效
    * patchStatus  **参数解释**: Patch的状态。d表示SQL ID模式，h表示SQL Hash模式。 **取值范围**: - d：SQL ID模式 - h：SQL Hash模式
    * abortPatch  **参数解释**: 是否为Abort Patch。 **取值范围**: - true：是 - false：否
    * hint  **参数解释**: Patch内容（Hint文本）。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: SQL Patch所属的节点。主备版为主DN，分布式版为CN。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'patchName' => 'patch_name',
            'sqlId' => 'sql_id',
            'enabled' => 'enabled',
            'patchStatus' => 'patch_status',
            'abortPatch' => 'abort_patch',
            'hint' => 'hint',
            'sqlText' => 'sql_text',
            'nodeId' => 'node_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * patchName  **参数解释**: Patch名称。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: unique_sql_id，标识SQL文本的ID。 **取值范围**: 不涉及。
    * enabled  **参数解释**: Patch是否生效。 **取值范围**: - true：生效 - false：不生效
    * patchStatus  **参数解释**: Patch的状态。d表示SQL ID模式，h表示SQL Hash模式。 **取值范围**: - d：SQL ID模式 - h：SQL Hash模式
    * abortPatch  **参数解释**: 是否为Abort Patch。 **取值范围**: - true：是 - false：否
    * hint  **参数解释**: Patch内容（Hint文本）。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: SQL Patch所属的节点。主备版为主DN，分布式版为CN。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'patchName' => 'setPatchName',
            'sqlId' => 'setSqlId',
            'enabled' => 'setEnabled',
            'patchStatus' => 'setPatchStatus',
            'abortPatch' => 'setAbortPatch',
            'hint' => 'setHint',
            'sqlText' => 'setSqlText',
            'nodeId' => 'setNodeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * patchName  **参数解释**: Patch名称。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: unique_sql_id，标识SQL文本的ID。 **取值范围**: 不涉及。
    * enabled  **参数解释**: Patch是否生效。 **取值范围**: - true：生效 - false：不生效
    * patchStatus  **参数解释**: Patch的状态。d表示SQL ID模式，h表示SQL Hash模式。 **取值范围**: - d：SQL ID模式 - h：SQL Hash模式
    * abortPatch  **参数解释**: 是否为Abort Patch。 **取值范围**: - true：是 - false：否
    * hint  **参数解释**: Patch内容（Hint文本）。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: SQL Patch所属的节点。主备版为主DN，分布式版为CN。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'patchName' => 'getPatchName',
            'sqlId' => 'getSqlId',
            'enabled' => 'getEnabled',
            'patchStatus' => 'getPatchStatus',
            'abortPatch' => 'getAbortPatch',
            'hint' => 'getHint',
            'sqlText' => 'getSqlText',
            'nodeId' => 'getNodeId'
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
    const PATCH_STATUS_D = 'd';
    const PATCH_STATUS_H = 'h';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPatchStatusAllowableValues()
    {
        return [
            self::PATCH_STATUS_D,
            self::PATCH_STATUS_H,
        ];
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
        $this->container['patchName'] = isset($data['patchName']) ? $data['patchName'] : null;
        $this->container['sqlId'] = isset($data['sqlId']) ? $data['sqlId'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['patchStatus'] = isset($data['patchStatus']) ? $data['patchStatus'] : null;
        $this->container['abortPatch'] = isset($data['abortPatch']) ? $data['abortPatch'] : null;
        $this->container['hint'] = isset($data['hint']) ? $data['hint'] : null;
        $this->container['sqlText'] = isset($data['sqlText']) ? $data['sqlText'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPatchStatusAllowableValues();
                if (!is_null($this->container['patchStatus']) && !in_array($this->container['patchStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'patchStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets patchName
    *  **参数解释**: Patch名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getPatchName()
    {
        return $this->container['patchName'];
    }

    /**
    * Sets patchName
    *
    * @param string|null $patchName **参数解释**: Patch名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPatchName($patchName)
    {
        $this->container['patchName'] = $patchName;
        return $this;
    }

    /**
    * Gets sqlId
    *  **参数解释**: unique_sql_id，标识SQL文本的ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSqlId()
    {
        return $this->container['sqlId'];
    }

    /**
    * Sets sqlId
    *
    * @param string|null $sqlId **参数解释**: unique_sql_id，标识SQL文本的ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSqlId($sqlId)
    {
        $this->container['sqlId'] = $sqlId;
        return $this;
    }

    /**
    * Gets enabled
    *  **参数解释**: Patch是否生效。 **取值范围**: - true：生效 - false：不生效
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled **参数解释**: Patch是否生效。 **取值范围**: - true：生效 - false：不生效
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets patchStatus
    *  **参数解释**: Patch的状态。d表示SQL ID模式，h表示SQL Hash模式。 **取值范围**: - d：SQL ID模式 - h：SQL Hash模式
    *
    * @return string|null
    */
    public function getPatchStatus()
    {
        return $this->container['patchStatus'];
    }

    /**
    * Sets patchStatus
    *
    * @param string|null $patchStatus **参数解释**: Patch的状态。d表示SQL ID模式，h表示SQL Hash模式。 **取值范围**: - d：SQL ID模式 - h：SQL Hash模式
    *
    * @return $this
    */
    public function setPatchStatus($patchStatus)
    {
        $this->container['patchStatus'] = $patchStatus;
        return $this;
    }

    /**
    * Gets abortPatch
    *  **参数解释**: 是否为Abort Patch。 **取值范围**: - true：是 - false：否
    *
    * @return bool|null
    */
    public function getAbortPatch()
    {
        return $this->container['abortPatch'];
    }

    /**
    * Sets abortPatch
    *
    * @param bool|null $abortPatch **参数解释**: 是否为Abort Patch。 **取值范围**: - true：是 - false：否
    *
    * @return $this
    */
    public function setAbortPatch($abortPatch)
    {
        $this->container['abortPatch'] = $abortPatch;
        return $this;
    }

    /**
    * Gets hint
    *  **参数解释**: Patch内容（Hint文本）。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getHint()
    {
        return $this->container['hint'];
    }

    /**
    * Sets hint
    *
    * @param string|null $hint **参数解释**: Patch内容（Hint文本）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setHint($hint)
    {
        $this->container['hint'] = $hint;
        return $this;
    }

    /**
    * Gets sqlText
    *  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSqlText()
    {
        return $this->container['sqlText'];
    }

    /**
    * Sets sqlText
    *
    * @param string|null $sqlText **参数解释**: SQL文本。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSqlText($sqlText)
    {
        $this->container['sqlText'] = $sqlText;
        return $this;
    }

    /**
    * Gets nodeId
    *  **参数解释**: SQL Patch所属的节点。主备版为主DN，分布式版为CN。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId **参数解释**: SQL Patch所属的节点。主备版为主DN，分布式版为CN。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
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


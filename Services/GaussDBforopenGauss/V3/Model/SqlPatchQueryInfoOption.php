<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlPatchQueryInfoOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlPatchQueryInfoOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlId  **参数解释**: unique_sql_id。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * patchName  **参数解释**: SQL Patch名称。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * enabled  **参数解释**: Patch是否生效。 **取值范围**: - true：生效 - false：不生效
    * abortPatch  **参数解释**: Patch类型。 **取值范围**: - true：Abort Patch - false：非Abort Patch
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlId' => 'string',
            'sqlText' => 'string',
            'patchName' => 'string',
            'nodeId' => 'string',
            'enabled' => 'bool',
            'abortPatch' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlId  **参数解释**: unique_sql_id。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * patchName  **参数解释**: SQL Patch名称。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * enabled  **参数解释**: Patch是否生效。 **取值范围**: - true：生效 - false：不生效
    * abortPatch  **参数解释**: Patch类型。 **取值范围**: - true：Abort Patch - false：非Abort Patch
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlId' => null,
        'sqlText' => null,
        'patchName' => null,
        'nodeId' => null,
        'enabled' => null,
        'abortPatch' => null
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
    * sqlId  **参数解释**: unique_sql_id。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * patchName  **参数解释**: SQL Patch名称。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * enabled  **参数解释**: Patch是否生效。 **取值范围**: - true：生效 - false：不生效
    * abortPatch  **参数解释**: Patch类型。 **取值范围**: - true：Abort Patch - false：非Abort Patch
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlId' => 'sql_id',
            'sqlText' => 'sql_text',
            'patchName' => 'patch_name',
            'nodeId' => 'node_id',
            'enabled' => 'enabled',
            'abortPatch' => 'abort_patch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlId  **参数解释**: unique_sql_id。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * patchName  **参数解释**: SQL Patch名称。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * enabled  **参数解释**: Patch是否生效。 **取值范围**: - true：生效 - false：不生效
    * abortPatch  **参数解释**: Patch类型。 **取值范围**: - true：Abort Patch - false：非Abort Patch
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlId' => 'setSqlId',
            'sqlText' => 'setSqlText',
            'patchName' => 'setPatchName',
            'nodeId' => 'setNodeId',
            'enabled' => 'setEnabled',
            'abortPatch' => 'setAbortPatch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlId  **参数解释**: unique_sql_id。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * patchName  **参数解释**: SQL Patch名称。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * enabled  **参数解释**: Patch是否生效。 **取值范围**: - true：生效 - false：不生效
    * abortPatch  **参数解释**: Patch类型。 **取值范围**: - true：Abort Patch - false：非Abort Patch
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlId' => 'getSqlId',
            'sqlText' => 'getSqlText',
            'patchName' => 'getPatchName',
            'nodeId' => 'getNodeId',
            'enabled' => 'getEnabled',
            'abortPatch' => 'getAbortPatch'
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
        $this->container['sqlId'] = isset($data['sqlId']) ? $data['sqlId'] : null;
        $this->container['sqlText'] = isset($data['sqlText']) ? $data['sqlText'] : null;
        $this->container['patchName'] = isset($data['patchName']) ? $data['patchName'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['abortPatch'] = isset($data['abortPatch']) ? $data['abortPatch'] : null;
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
    * Gets sqlId
    *  **参数解释**: unique_sql_id。 **取值范围**: 不涉及。
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
    * @param string|null $sqlId **参数解释**: unique_sql_id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSqlId($sqlId)
    {
        $this->container['sqlId'] = $sqlId;
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
    * Gets patchName
    *  **参数解释**: SQL Patch名称。 **取值范围**: 不涉及。
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
    * @param string|null $patchName **参数解释**: SQL Patch名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPatchName($patchName)
    {
        $this->container['patchName'] = $patchName;
        return $this;
    }

    /**
    * Gets nodeId
    *  **参数解释**: 节点ID。 **取值范围**: 不涉及。
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
    * @param string|null $nodeId **参数解释**: 节点ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
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
    * Gets abortPatch
    *  **参数解释**: Patch类型。 **取值范围**: - true：Abort Patch - false：非Abort Patch
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
    * @param bool|null $abortPatch **参数解释**: Patch类型。 **取值范围**: - true：Abort Patch - false：非Abort Patch
    *
    * @return $this
    */
    public function setAbortPatch($abortPatch)
    {
        $this->container['abortPatch'] = $abortPatch;
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


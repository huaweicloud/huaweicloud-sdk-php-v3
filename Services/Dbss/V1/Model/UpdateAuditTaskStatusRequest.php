<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAuditTaskStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAuditTaskStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * busiType  **参数解释**： 业务类型。 **约束限制**： 区分大小写，以取值范围为准 **取值范围**： - risk：风险  - audit：审计实例 **默认取值**： 不涉及
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'busiType' => 'string',
            'body' => '\HuaweiCloud\SDK\Dbss\V1\Model\AuditSummaryStatusRequest'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * busiType  **参数解释**： 业务类型。 **约束限制**： 区分大小写，以取值范围为准 **取值范围**： - risk：风险  - audit：审计实例 **默认取值**： 不涉及
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'busiType' => null,
        'body' => null
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
    * busiType  **参数解释**： 业务类型。 **约束限制**： 区分大小写，以取值范围为准 **取值范围**： - risk：风险  - audit：审计实例 **默认取值**： 不涉及
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'busiType' => 'busi_type',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * busiType  **参数解释**： 业务类型。 **约束限制**： 区分大小写，以取值范围为准 **取值范围**： - risk：风险  - audit：审计实例 **默认取值**： 不涉及
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'busiType' => 'setBusiType',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * busiType  **参数解释**： 业务类型。 **约束限制**： 区分大小写，以取值范围为准 **取值范围**： - risk：风险  - audit：审计实例 **默认取值**： 不涉及
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'busiType' => 'getBusiType',
            'body' => 'getBody'
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
        $this->container['busiType'] = isset($data['busiType']) ? $data['busiType'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['busiType'] === null) {
            $invalidProperties[] = "'busiType' can't be null";
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
    * Gets busiType
    *  **参数解释**： 业务类型。 **约束限制**： 区分大小写，以取值范围为准 **取值范围**： - risk：风险  - audit：审计实例 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getBusiType()
    {
        return $this->container['busiType'];
    }

    /**
    * Sets busiType
    *
    * @param string $busiType **参数解释**： 业务类型。 **约束限制**： 区分大小写，以取值范围为准 **取值范围**： - risk：风险  - audit：审计实例 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setBusiType($busiType)
    {
        $this->container['busiType'] = $busiType;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\AuditSummaryStatusRequest|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\AuditSummaryStatusRequest|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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


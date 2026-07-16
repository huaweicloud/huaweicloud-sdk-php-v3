<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ValidateAuthResults implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ValidateAuthResults';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  **参数解释**：细粒度权限。 **取值范围**：不涉及。
    * verdict  **参数解释**：鉴权通过与否。 **取值范围**： - allow：通过。 - deny：不通过。
    * actionId  **参数解释**：随机的uuid，用来定位问题使用。 **取值范围**：不涉及。
    * resource  **参数解释**：请求资源。 **取值范围**：不涉及。
    * cause  **参数解释**：失败情况下原因。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'verdict' => 'string',
            'actionId' => 'string',
            'resource' => 'string',
            'cause' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Cause[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  **参数解释**：细粒度权限。 **取值范围**：不涉及。
    * verdict  **参数解释**：鉴权通过与否。 **取值范围**： - allow：通过。 - deny：不通过。
    * actionId  **参数解释**：随机的uuid，用来定位问题使用。 **取值范围**：不涉及。
    * resource  **参数解释**：请求资源。 **取值范围**：不涉及。
    * cause  **参数解释**：失败情况下原因。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'verdict' => null,
        'actionId' => null,
        'resource' => null,
        'cause' => null
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
    * action  **参数解释**：细粒度权限。 **取值范围**：不涉及。
    * verdict  **参数解释**：鉴权通过与否。 **取值范围**： - allow：通过。 - deny：不通过。
    * actionId  **参数解释**：随机的uuid，用来定位问题使用。 **取值范围**：不涉及。
    * resource  **参数解释**：请求资源。 **取值范围**：不涉及。
    * cause  **参数解释**：失败情况下原因。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'verdict' => 'verdict',
            'actionId' => 'action_id',
            'resource' => 'resource',
            'cause' => 'cause'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  **参数解释**：细粒度权限。 **取值范围**：不涉及。
    * verdict  **参数解释**：鉴权通过与否。 **取值范围**： - allow：通过。 - deny：不通过。
    * actionId  **参数解释**：随机的uuid，用来定位问题使用。 **取值范围**：不涉及。
    * resource  **参数解释**：请求资源。 **取值范围**：不涉及。
    * cause  **参数解释**：失败情况下原因。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'verdict' => 'setVerdict',
            'actionId' => 'setActionId',
            'resource' => 'setResource',
            'cause' => 'setCause'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  **参数解释**：细粒度权限。 **取值范围**：不涉及。
    * verdict  **参数解释**：鉴权通过与否。 **取值范围**： - allow：通过。 - deny：不通过。
    * actionId  **参数解释**：随机的uuid，用来定位问题使用。 **取值范围**：不涉及。
    * resource  **参数解释**：请求资源。 **取值范围**：不涉及。
    * cause  **参数解释**：失败情况下原因。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'verdict' => 'getVerdict',
            'actionId' => 'getActionId',
            'resource' => 'getResource',
            'cause' => 'getCause'
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
    const VERDICT_ALLOW = 'allow';
    const VERDICT_DENY = 'deny';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVerdictAllowableValues()
    {
        return [
            self::VERDICT_ALLOW,
            self::VERDICT_DENY,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['verdict'] = isset($data['verdict']) ? $data['verdict'] : null;
        $this->container['actionId'] = isset($data['actionId']) ? $data['actionId'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['cause'] = isset($data['cause']) ? $data['cause'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getVerdictAllowableValues();
                if (!is_null($this->container['verdict']) && !in_array($this->container['verdict'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'verdict', must be one of '%s'",
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
    * Gets action
    *  **参数解释**：细粒度权限。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action **参数解释**：细粒度权限。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets verdict
    *  **参数解释**：鉴权通过与否。 **取值范围**： - allow：通过。 - deny：不通过。
    *
    * @return string|null
    */
    public function getVerdict()
    {
        return $this->container['verdict'];
    }

    /**
    * Sets verdict
    *
    * @param string|null $verdict **参数解释**：鉴权通过与否。 **取值范围**： - allow：通过。 - deny：不通过。
    *
    * @return $this
    */
    public function setVerdict($verdict)
    {
        $this->container['verdict'] = $verdict;
        return $this;
    }

    /**
    * Gets actionId
    *  **参数解释**：随机的uuid，用来定位问题使用。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getActionId()
    {
        return $this->container['actionId'];
    }

    /**
    * Sets actionId
    *
    * @param string|null $actionId **参数解释**：随机的uuid，用来定位问题使用。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setActionId($actionId)
    {
        $this->container['actionId'] = $actionId;
        return $this;
    }

    /**
    * Gets resource
    *  **参数解释**：请求资源。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string|null $resource **参数解释**：请求资源。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets cause
    *  **参数解释**：失败情况下原因。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Cause[]|null
    */
    public function getCause()
    {
        return $this->container['cause'];
    }

    /**
    * Sets cause
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Cause[]|null $cause **参数解释**：失败情况下原因。
    *
    * @return $this
    */
    public function setCause($cause)
    {
        $this->container['cause'] = $cause;
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


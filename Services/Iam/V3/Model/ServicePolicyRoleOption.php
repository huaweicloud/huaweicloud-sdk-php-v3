<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServicePolicyRoleOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServicePolicyRoleOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * displayName  自定义策略展示名。
    * type  自定义策略的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    * description  自定义策略的描述信息。
    * descriptionCn  自定义策略的中文描述信息。
    * policy  policy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'displayName' => 'string',
            'type' => 'string',
            'description' => 'string',
            'descriptionCn' => 'string',
            'policy' => '\HuaweiCloud\SDK\Iam\V3\Model\ServicePolicy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * displayName  自定义策略展示名。
    * type  自定义策略的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    * description  自定义策略的描述信息。
    * descriptionCn  自定义策略的中文描述信息。
    * policy  policy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'displayName' => null,
        'type' => null,
        'description' => null,
        'descriptionCn' => null,
        'policy' => null
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
    * displayName  自定义策略展示名。
    * type  自定义策略的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    * description  自定义策略的描述信息。
    * descriptionCn  自定义策略的中文描述信息。
    * policy  policy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'displayName' => 'display_name',
            'type' => 'type',
            'description' => 'description',
            'descriptionCn' => 'description_cn',
            'policy' => 'policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * displayName  自定义策略展示名。
    * type  自定义策略的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    * description  自定义策略的描述信息。
    * descriptionCn  自定义策略的中文描述信息。
    * policy  policy
    *
    * @var string[]
    */
    protected static $setters = [
            'displayName' => 'setDisplayName',
            'type' => 'setType',
            'description' => 'setDescription',
            'descriptionCn' => 'setDescriptionCn',
            'policy' => 'setPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * displayName  自定义策略展示名。
    * type  自定义策略的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    * description  自定义策略的描述信息。
    * descriptionCn  自定义策略的中文描述信息。
    * policy  policy
    *
    * @var string[]
    */
    protected static $getters = [
            'displayName' => 'getDisplayName',
            'type' => 'getType',
            'description' => 'getDescription',
            'descriptionCn' => 'getDescriptionCn',
            'policy' => 'getPolicy'
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
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['descriptionCn'] = isset($data['descriptionCn']) ? $data['descriptionCn'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['policy'] === null) {
            $invalidProperties[] = "'policy' can't be null";
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
    * Gets displayName
    *  自定义策略展示名。
    *
    * @return string
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string $displayName 自定义策略展示名。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets type
    *  自定义策略的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 自定义策略的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  自定义策略的描述信息。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 自定义策略的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets descriptionCn
    *  自定义策略的中文描述信息。
    *
    * @return string|null
    */
    public function getDescriptionCn()
    {
        return $this->container['descriptionCn'];
    }

    /**
    * Sets descriptionCn
    *
    * @param string|null $descriptionCn 自定义策略的中文描述信息。
    *
    * @return $this
    */
    public function setDescriptionCn($descriptionCn)
    {
        $this->container['descriptionCn'] = $descriptionCn;
        return $this;
    }

    /**
    * Gets policy
    *  policy
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\ServicePolicy
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\ServicePolicy $policy policy
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
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


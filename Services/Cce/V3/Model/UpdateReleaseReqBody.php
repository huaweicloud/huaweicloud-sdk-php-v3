<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateReleaseReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateReleaseReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chartId  模板ID
    * action  更新操作，升级为upgrade，回退为rollback
    * parameters  parameters
    * values  values
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chartId' => 'string',
            'action' => 'string',
            'parameters' => '\HuaweiCloud\SDK\Cce\V3\Model\ReleaseReqBodyParams',
            'values' => '\HuaweiCloud\SDK\Cce\V3\Model\CreateReleaseReqBodyValues'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chartId  模板ID
    * action  更新操作，升级为upgrade，回退为rollback
    * parameters  parameters
    * values  values
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chartId' => null,
        'action' => null,
        'parameters' => null,
        'values' => null
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
    * chartId  模板ID
    * action  更新操作，升级为upgrade，回退为rollback
    * parameters  parameters
    * values  values
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chartId' => 'chart_id',
            'action' => 'action',
            'parameters' => 'parameters',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chartId  模板ID
    * action  更新操作，升级为upgrade，回退为rollback
    * parameters  parameters
    * values  values
    *
    * @var string[]
    */
    protected static $setters = [
            'chartId' => 'setChartId',
            'action' => 'setAction',
            'parameters' => 'setParameters',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chartId  模板ID
    * action  更新操作，升级为upgrade，回退为rollback
    * parameters  parameters
    * values  values
    *
    * @var string[]
    */
    protected static $getters = [
            'chartId' => 'getChartId',
            'action' => 'getAction',
            'parameters' => 'getParameters',
            'values' => 'getValues'
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
    const ACTION_UPGRADE = 'upgrade';
    const ACTION_ROLLBACK = 'rollback';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_UPGRADE,
            self::ACTION_ROLLBACK,
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
        $this->container['chartId'] = isset($data['chartId']) ? $data['chartId'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['chartId'] === null) {
            $invalidProperties[] = "'chartId' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['parameters'] === null) {
            $invalidProperties[] = "'parameters' can't be null";
        }
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
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
    * Gets chartId
    *  模板ID
    *
    * @return string
    */
    public function getChartId()
    {
        return $this->container['chartId'];
    }

    /**
    * Sets chartId
    *
    * @param string $chartId 模板ID
    *
    * @return $this
    */
    public function setChartId($chartId)
    {
        $this->container['chartId'] = $chartId;
        return $this;
    }

    /**
    * Gets action
    *  更新操作，升级为upgrade，回退为rollback
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 更新操作，升级为upgrade，回退为rollback
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets parameters
    *  parameters
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ReleaseReqBodyParams
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ReleaseReqBodyParams $parameters parameters
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets values
    *  values
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\CreateReleaseReqBodyValues
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\CreateReleaseReqBodyValues $values values
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
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


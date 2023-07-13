<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecutionPlanDiffAttribute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecutionPlanDiffAttribute';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  当前资源将要被修改的参数的名字。
    * previousValue  当前资源被修改的参数的原始值。  若是资源创建的场景，则previous_value为空  若远端资源产生了偏差，则同一个资源会返回两个ExecutionPlanItem，其中一个的drifted为true，另一个的drifted为false   * drifted为true的previous_value为资源栈中所维持的资源属性和状态   * drifted为false的previous_value为provider请求远端资源后，远端资源所返回的资源属性和状态  若远端资源未产生偏差，则只会返回一个drifted为false的ExecutionPlanItem   * drifted为false的previous_value为资源栈中所维持的资源属性和状态
    * targetValue  当前资源被修改的参数的目的值。  若是资源删除的场景，则target_value为空  若远端资源产生了偏差，则同一个资源会返回两个ExecutionPlanItem，其中一个的drifted为true，另一个的drifted为false   * drifted为true的target_value为provider请求远端资源后，远端资源所返回的资源属性和状态   * drifted为false的target_value为基于用户模板更新的资源属性和状态  若远端资源未产生偏差，则只会返回一个drifted为false的ExecutionPlanItem   * drifted为false的target_value为基于用户模板更新的资源属性和状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'previousValue' => 'string',
            'targetValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  当前资源将要被修改的参数的名字。
    * previousValue  当前资源被修改的参数的原始值。  若是资源创建的场景，则previous_value为空  若远端资源产生了偏差，则同一个资源会返回两个ExecutionPlanItem，其中一个的drifted为true，另一个的drifted为false   * drifted为true的previous_value为资源栈中所维持的资源属性和状态   * drifted为false的previous_value为provider请求远端资源后，远端资源所返回的资源属性和状态  若远端资源未产生偏差，则只会返回一个drifted为false的ExecutionPlanItem   * drifted为false的previous_value为资源栈中所维持的资源属性和状态
    * targetValue  当前资源被修改的参数的目的值。  若是资源删除的场景，则target_value为空  若远端资源产生了偏差，则同一个资源会返回两个ExecutionPlanItem，其中一个的drifted为true，另一个的drifted为false   * drifted为true的target_value为provider请求远端资源后，远端资源所返回的资源属性和状态   * drifted为false的target_value为基于用户模板更新的资源属性和状态  若远端资源未产生偏差，则只会返回一个drifted为false的ExecutionPlanItem   * drifted为false的target_value为基于用户模板更新的资源属性和状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'previousValue' => null,
        'targetValue' => null
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
    * name  当前资源将要被修改的参数的名字。
    * previousValue  当前资源被修改的参数的原始值。  若是资源创建的场景，则previous_value为空  若远端资源产生了偏差，则同一个资源会返回两个ExecutionPlanItem，其中一个的drifted为true，另一个的drifted为false   * drifted为true的previous_value为资源栈中所维持的资源属性和状态   * drifted为false的previous_value为provider请求远端资源后，远端资源所返回的资源属性和状态  若远端资源未产生偏差，则只会返回一个drifted为false的ExecutionPlanItem   * drifted为false的previous_value为资源栈中所维持的资源属性和状态
    * targetValue  当前资源被修改的参数的目的值。  若是资源删除的场景，则target_value为空  若远端资源产生了偏差，则同一个资源会返回两个ExecutionPlanItem，其中一个的drifted为true，另一个的drifted为false   * drifted为true的target_value为provider请求远端资源后，远端资源所返回的资源属性和状态   * drifted为false的target_value为基于用户模板更新的资源属性和状态  若远端资源未产生偏差，则只会返回一个drifted为false的ExecutionPlanItem   * drifted为false的target_value为基于用户模板更新的资源属性和状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'previousValue' => 'previous_value',
            'targetValue' => 'target_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  当前资源将要被修改的参数的名字。
    * previousValue  当前资源被修改的参数的原始值。  若是资源创建的场景，则previous_value为空  若远端资源产生了偏差，则同一个资源会返回两个ExecutionPlanItem，其中一个的drifted为true，另一个的drifted为false   * drifted为true的previous_value为资源栈中所维持的资源属性和状态   * drifted为false的previous_value为provider请求远端资源后，远端资源所返回的资源属性和状态  若远端资源未产生偏差，则只会返回一个drifted为false的ExecutionPlanItem   * drifted为false的previous_value为资源栈中所维持的资源属性和状态
    * targetValue  当前资源被修改的参数的目的值。  若是资源删除的场景，则target_value为空  若远端资源产生了偏差，则同一个资源会返回两个ExecutionPlanItem，其中一个的drifted为true，另一个的drifted为false   * drifted为true的target_value为provider请求远端资源后，远端资源所返回的资源属性和状态   * drifted为false的target_value为基于用户模板更新的资源属性和状态  若远端资源未产生偏差，则只会返回一个drifted为false的ExecutionPlanItem   * drifted为false的target_value为基于用户模板更新的资源属性和状态
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'previousValue' => 'setPreviousValue',
            'targetValue' => 'setTargetValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  当前资源将要被修改的参数的名字。
    * previousValue  当前资源被修改的参数的原始值。  若是资源创建的场景，则previous_value为空  若远端资源产生了偏差，则同一个资源会返回两个ExecutionPlanItem，其中一个的drifted为true，另一个的drifted为false   * drifted为true的previous_value为资源栈中所维持的资源属性和状态   * drifted为false的previous_value为provider请求远端资源后，远端资源所返回的资源属性和状态  若远端资源未产生偏差，则只会返回一个drifted为false的ExecutionPlanItem   * drifted为false的previous_value为资源栈中所维持的资源属性和状态
    * targetValue  当前资源被修改的参数的目的值。  若是资源删除的场景，则target_value为空  若远端资源产生了偏差，则同一个资源会返回两个ExecutionPlanItem，其中一个的drifted为true，另一个的drifted为false   * drifted为true的target_value为provider请求远端资源后，远端资源所返回的资源属性和状态   * drifted为false的target_value为基于用户模板更新的资源属性和状态  若远端资源未产生偏差，则只会返回一个drifted为false的ExecutionPlanItem   * drifted为false的target_value为基于用户模板更新的资源属性和状态
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'previousValue' => 'getPreviousValue',
            'targetValue' => 'getTargetValue'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['previousValue'] = isset($data['previousValue']) ? $data['previousValue'] : null;
        $this->container['targetValue'] = isset($data['targetValue']) ? $data['targetValue'] : null;
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
    * Gets name
    *  当前资源将要被修改的参数的名字。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 当前资源将要被修改的参数的名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets previousValue
    *  当前资源被修改的参数的原始值。  若是资源创建的场景，则previous_value为空  若远端资源产生了偏差，则同一个资源会返回两个ExecutionPlanItem，其中一个的drifted为true，另一个的drifted为false   * drifted为true的previous_value为资源栈中所维持的资源属性和状态   * drifted为false的previous_value为provider请求远端资源后，远端资源所返回的资源属性和状态  若远端资源未产生偏差，则只会返回一个drifted为false的ExecutionPlanItem   * drifted为false的previous_value为资源栈中所维持的资源属性和状态
    *
    * @return string|null
    */
    public function getPreviousValue()
    {
        return $this->container['previousValue'];
    }

    /**
    * Sets previousValue
    *
    * @param string|null $previousValue 当前资源被修改的参数的原始值。  若是资源创建的场景，则previous_value为空  若远端资源产生了偏差，则同一个资源会返回两个ExecutionPlanItem，其中一个的drifted为true，另一个的drifted为false   * drifted为true的previous_value为资源栈中所维持的资源属性和状态   * drifted为false的previous_value为provider请求远端资源后，远端资源所返回的资源属性和状态  若远端资源未产生偏差，则只会返回一个drifted为false的ExecutionPlanItem   * drifted为false的previous_value为资源栈中所维持的资源属性和状态
    *
    * @return $this
    */
    public function setPreviousValue($previousValue)
    {
        $this->container['previousValue'] = $previousValue;
        return $this;
    }

    /**
    * Gets targetValue
    *  当前资源被修改的参数的目的值。  若是资源删除的场景，则target_value为空  若远端资源产生了偏差，则同一个资源会返回两个ExecutionPlanItem，其中一个的drifted为true，另一个的drifted为false   * drifted为true的target_value为provider请求远端资源后，远端资源所返回的资源属性和状态   * drifted为false的target_value为基于用户模板更新的资源属性和状态  若远端资源未产生偏差，则只会返回一个drifted为false的ExecutionPlanItem   * drifted为false的target_value为基于用户模板更新的资源属性和状态
    *
    * @return string|null
    */
    public function getTargetValue()
    {
        return $this->container['targetValue'];
    }

    /**
    * Sets targetValue
    *
    * @param string|null $targetValue 当前资源被修改的参数的目的值。  若是资源删除的场景，则target_value为空  若远端资源产生了偏差，则同一个资源会返回两个ExecutionPlanItem，其中一个的drifted为true，另一个的drifted为false   * drifted为true的target_value为provider请求远端资源后，远端资源所返回的资源属性和状态   * drifted为false的target_value为基于用户模板更新的资源属性和状态  若远端资源未产生偏差，则只会返回一个drifted为false的ExecutionPlanItem   * drifted为false的target_value为基于用户模板更新的资源属性和状态
    *
    * @return $this
    */
    public function setTargetValue($targetValue)
    {
        $this->container['targetValue'] = $targetValue;
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


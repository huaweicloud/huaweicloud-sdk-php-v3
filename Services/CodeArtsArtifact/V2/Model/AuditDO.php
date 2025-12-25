<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuditDO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuditDO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 操作ID。  **取值范围**： 不涉及。id
    * module  **参数解释**： 操作模块。  **取值范围**： 不涉及。
    * operation  **参数解释**： 操作类型。  **取值范围**： 不涉及。
    * time  **参数解释**： 操作时间。  **取值范围**： 不涉及。
    * info  **参数解释**： 操作信息。  **取值范围**： 不涉及。
    * data  **参数解释**： 操作数据。  **取值范围**： 不涉及。
    * reason  **参数解释**： 原因。  **取值范围**： 不涉及。
    * userAgent  **参数解释**： 操作人客户端类型。  **取值范围**： 不涉及。
    * operator  **参数解释**： 操作人。  **取值范围**： 不涉及。
    * operatorNickName  **参数解释**： 操作人名字。  **取值范围**： 不涉及。
    * operatorTenantName  **参数解释**： 操作人租户名。  **取值范围**： 不涉及。
    * ipSource  **参数解释**： 操作人IP地址。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'module' => 'string',
            'operation' => 'string',
            'time' => 'string',
            'info' => 'string',
            'data' => 'string',
            'reason' => 'string',
            'userAgent' => 'string',
            'operator' => 'string',
            'operatorNickName' => 'string',
            'operatorTenantName' => 'string',
            'ipSource' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 操作ID。  **取值范围**： 不涉及。id
    * module  **参数解释**： 操作模块。  **取值范围**： 不涉及。
    * operation  **参数解释**： 操作类型。  **取值范围**： 不涉及。
    * time  **参数解释**： 操作时间。  **取值范围**： 不涉及。
    * info  **参数解释**： 操作信息。  **取值范围**： 不涉及。
    * data  **参数解释**： 操作数据。  **取值范围**： 不涉及。
    * reason  **参数解释**： 原因。  **取值范围**： 不涉及。
    * userAgent  **参数解释**： 操作人客户端类型。  **取值范围**： 不涉及。
    * operator  **参数解释**： 操作人。  **取值范围**： 不涉及。
    * operatorNickName  **参数解释**： 操作人名字。  **取值范围**： 不涉及。
    * operatorTenantName  **参数解释**： 操作人租户名。  **取值范围**： 不涉及。
    * ipSource  **参数解释**： 操作人IP地址。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'module' => null,
        'operation' => null,
        'time' => null,
        'info' => null,
        'data' => null,
        'reason' => null,
        'userAgent' => null,
        'operator' => null,
        'operatorNickName' => null,
        'operatorTenantName' => null,
        'ipSource' => null
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
    * id  **参数解释**： 操作ID。  **取值范围**： 不涉及。id
    * module  **参数解释**： 操作模块。  **取值范围**： 不涉及。
    * operation  **参数解释**： 操作类型。  **取值范围**： 不涉及。
    * time  **参数解释**： 操作时间。  **取值范围**： 不涉及。
    * info  **参数解释**： 操作信息。  **取值范围**： 不涉及。
    * data  **参数解释**： 操作数据。  **取值范围**： 不涉及。
    * reason  **参数解释**： 原因。  **取值范围**： 不涉及。
    * userAgent  **参数解释**： 操作人客户端类型。  **取值范围**： 不涉及。
    * operator  **参数解释**： 操作人。  **取值范围**： 不涉及。
    * operatorNickName  **参数解释**： 操作人名字。  **取值范围**： 不涉及。
    * operatorTenantName  **参数解释**： 操作人租户名。  **取值范围**： 不涉及。
    * ipSource  **参数解释**： 操作人IP地址。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'module' => 'module',
            'operation' => 'operation',
            'time' => 'time',
            'info' => 'info',
            'data' => 'data',
            'reason' => 'reason',
            'userAgent' => 'userAgent',
            'operator' => 'operator',
            'operatorNickName' => 'operatorNickName',
            'operatorTenantName' => 'operatorTenantName',
            'ipSource' => 'ipSource'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 操作ID。  **取值范围**： 不涉及。id
    * module  **参数解释**： 操作模块。  **取值范围**： 不涉及。
    * operation  **参数解释**： 操作类型。  **取值范围**： 不涉及。
    * time  **参数解释**： 操作时间。  **取值范围**： 不涉及。
    * info  **参数解释**： 操作信息。  **取值范围**： 不涉及。
    * data  **参数解释**： 操作数据。  **取值范围**： 不涉及。
    * reason  **参数解释**： 原因。  **取值范围**： 不涉及。
    * userAgent  **参数解释**： 操作人客户端类型。  **取值范围**： 不涉及。
    * operator  **参数解释**： 操作人。  **取值范围**： 不涉及。
    * operatorNickName  **参数解释**： 操作人名字。  **取值范围**： 不涉及。
    * operatorTenantName  **参数解释**： 操作人租户名。  **取值范围**： 不涉及。
    * ipSource  **参数解释**： 操作人IP地址。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'module' => 'setModule',
            'operation' => 'setOperation',
            'time' => 'setTime',
            'info' => 'setInfo',
            'data' => 'setData',
            'reason' => 'setReason',
            'userAgent' => 'setUserAgent',
            'operator' => 'setOperator',
            'operatorNickName' => 'setOperatorNickName',
            'operatorTenantName' => 'setOperatorTenantName',
            'ipSource' => 'setIpSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 操作ID。  **取值范围**： 不涉及。id
    * module  **参数解释**： 操作模块。  **取值范围**： 不涉及。
    * operation  **参数解释**： 操作类型。  **取值范围**： 不涉及。
    * time  **参数解释**： 操作时间。  **取值范围**： 不涉及。
    * info  **参数解释**： 操作信息。  **取值范围**： 不涉及。
    * data  **参数解释**： 操作数据。  **取值范围**： 不涉及。
    * reason  **参数解释**： 原因。  **取值范围**： 不涉及。
    * userAgent  **参数解释**： 操作人客户端类型。  **取值范围**： 不涉及。
    * operator  **参数解释**： 操作人。  **取值范围**： 不涉及。
    * operatorNickName  **参数解释**： 操作人名字。  **取值范围**： 不涉及。
    * operatorTenantName  **参数解释**： 操作人租户名。  **取值范围**： 不涉及。
    * ipSource  **参数解释**： 操作人IP地址。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'module' => 'getModule',
            'operation' => 'getOperation',
            'time' => 'getTime',
            'info' => 'getInfo',
            'data' => 'getData',
            'reason' => 'getReason',
            'userAgent' => 'getUserAgent',
            'operator' => 'getOperator',
            'operatorNickName' => 'getOperatorNickName',
            'operatorTenantName' => 'getOperatorTenantName',
            'ipSource' => 'getIpSource'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['userAgent'] = isset($data['userAgent']) ? $data['userAgent'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['operatorNickName'] = isset($data['operatorNickName']) ? $data['operatorNickName'] : null;
        $this->container['operatorTenantName'] = isset($data['operatorTenantName']) ? $data['operatorTenantName'] : null;
        $this->container['ipSource'] = isset($data['ipSource']) ? $data['ipSource'] : null;
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
    * Gets id
    *  **参数解释**： 操作ID。  **取值范围**： 不涉及。id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**： 操作ID。  **取值范围**： 不涉及。id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets module
    *  **参数解释**： 操作模块。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
    * Sets module
    *
    * @param string|null $module **参数解释**： 操作模块。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setModule($module)
    {
        $this->container['module'] = $module;
        return $this;
    }

    /**
    * Gets operation
    *  **参数解释**： 操作类型。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string|null $operation **参数解释**： 操作类型。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets time
    *  **参数解释**： 操作时间。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time **参数解释**： 操作时间。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets info
    *  **参数解释**： 操作信息。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
    * Sets info
    *
    * @param string|null $info **参数解释**： 操作信息。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInfo($info)
    {
        $this->container['info'] = $info;
        return $this;
    }

    /**
    * Gets data
    *  **参数解释**： 操作数据。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param string|null $data **参数解释**： 操作数据。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets reason
    *  **参数解释**： 原因。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason **参数解释**： 原因。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets userAgent
    *  **参数解释**： 操作人客户端类型。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUserAgent()
    {
        return $this->container['userAgent'];
    }

    /**
    * Sets userAgent
    *
    * @param string|null $userAgent **参数解释**： 操作人客户端类型。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUserAgent($userAgent)
    {
        $this->container['userAgent'] = $userAgent;
        return $this;
    }

    /**
    * Gets operator
    *  **参数解释**： 操作人。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator **参数解释**： 操作人。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets operatorNickName
    *  **参数解释**： 操作人名字。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getOperatorNickName()
    {
        return $this->container['operatorNickName'];
    }

    /**
    * Sets operatorNickName
    *
    * @param string|null $operatorNickName **参数解释**： 操作人名字。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOperatorNickName($operatorNickName)
    {
        $this->container['operatorNickName'] = $operatorNickName;
        return $this;
    }

    /**
    * Gets operatorTenantName
    *  **参数解释**： 操作人租户名。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getOperatorTenantName()
    {
        return $this->container['operatorTenantName'];
    }

    /**
    * Sets operatorTenantName
    *
    * @param string|null $operatorTenantName **参数解释**： 操作人租户名。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOperatorTenantName($operatorTenantName)
    {
        $this->container['operatorTenantName'] = $operatorTenantName;
        return $this;
    }

    /**
    * Gets ipSource
    *  **参数解释**： 操作人IP地址。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getIpSource()
    {
        return $this->container['ipSource'];
    }

    /**
    * Sets ipSource
    *
    * @param string|null $ipSource **参数解释**： 操作人IP地址。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIpSource($ipSource)
    {
        $this->container['ipSource'] = $ipSource;
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


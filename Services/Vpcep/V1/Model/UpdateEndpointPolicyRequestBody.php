<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateEndpointPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateEndpointPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyStatement  Gateway类型终端节点策略信息，仅限OBS、SFS的终端节点服务的enable_policy值为true时支持该参数。
    * policyDocument  终端节点策略信息，仅当终端节点服务的enable_policy值为true时支持该参数，默认值为完全访问权限。（OBS、SFS的终端节点服务暂不支持该参数）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyStatement' => '\HuaweiCloud\SDK\Vpcep\V1\Model\PolicyStatement[]',
            'policyDocument' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyStatement  Gateway类型终端节点策略信息，仅限OBS、SFS的终端节点服务的enable_policy值为true时支持该参数。
    * policyDocument  终端节点策略信息，仅当终端节点服务的enable_policy值为true时支持该参数，默认值为完全访问权限。（OBS、SFS的终端节点服务暂不支持该参数）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyStatement' => null,
        'policyDocument' => null
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
    * policyStatement  Gateway类型终端节点策略信息，仅限OBS、SFS的终端节点服务的enable_policy值为true时支持该参数。
    * policyDocument  终端节点策略信息，仅当终端节点服务的enable_policy值为true时支持该参数，默认值为完全访问权限。（OBS、SFS的终端节点服务暂不支持该参数）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyStatement' => 'policy_statement',
            'policyDocument' => 'policy_document'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyStatement  Gateway类型终端节点策略信息，仅限OBS、SFS的终端节点服务的enable_policy值为true时支持该参数。
    * policyDocument  终端节点策略信息，仅当终端节点服务的enable_policy值为true时支持该参数，默认值为完全访问权限。（OBS、SFS的终端节点服务暂不支持该参数）
    *
    * @var string[]
    */
    protected static $setters = [
            'policyStatement' => 'setPolicyStatement',
            'policyDocument' => 'setPolicyDocument'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyStatement  Gateway类型终端节点策略信息，仅限OBS、SFS的终端节点服务的enable_policy值为true时支持该参数。
    * policyDocument  终端节点策略信息，仅当终端节点服务的enable_policy值为true时支持该参数，默认值为完全访问权限。（OBS、SFS的终端节点服务暂不支持该参数）
    *
    * @var string[]
    */
    protected static $getters = [
            'policyStatement' => 'getPolicyStatement',
            'policyDocument' => 'getPolicyDocument'
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
        $this->container['policyStatement'] = isset($data['policyStatement']) ? $data['policyStatement'] : null;
        $this->container['policyDocument'] = isset($data['policyDocument']) ? $data['policyDocument'] : null;
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
    * Gets policyStatement
    *  Gateway类型终端节点策略信息，仅限OBS、SFS的终端节点服务的enable_policy值为true时支持该参数。
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\PolicyStatement[]|null
    */
    public function getPolicyStatement()
    {
        return $this->container['policyStatement'];
    }

    /**
    * Sets policyStatement
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\PolicyStatement[]|null $policyStatement Gateway类型终端节点策略信息，仅限OBS、SFS的终端节点服务的enable_policy值为true时支持该参数。
    *
    * @return $this
    */
    public function setPolicyStatement($policyStatement)
    {
        $this->container['policyStatement'] = $policyStatement;
        return $this;
    }

    /**
    * Gets policyDocument
    *  终端节点策略信息，仅当终端节点服务的enable_policy值为true时支持该参数，默认值为完全访问权限。（OBS、SFS的终端节点服务暂不支持该参数）
    *
    * @return string|null
    */
    public function getPolicyDocument()
    {
        return $this->container['policyDocument'];
    }

    /**
    * Sets policyDocument
    *
    * @param string|null $policyDocument 终端节点策略信息，仅当终端节点服务的enable_policy值为true时支持该参数，默认值为完全访问权限。（OBS、SFS的终端节点服务暂不支持该参数）
    *
    * @return $this
    */
    public function setPolicyDocument($policyDocument)
    {
        $this->container['policyDocument'] = $policyDocument;
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


<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateStackInstancesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateStackInstancesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stackSetId  资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈集的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给予的stack_set_id和当前资源栈集的ID不一致，则返回400
    * deploymentTargets  deploymentTargets
    * varOverrides  varOverrides
    * operationPreferences  operationPreferences
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stackSetId' => 'string',
            'deploymentTargets' => '\HuaweiCloud\SDK\Aos\V1\Model\DeploymentTargets',
            'varOverrides' => '\HuaweiCloud\SDK\Aos\V1\Model\VarOverridesPrimitiveTypeHolderVarOverrides',
            'operationPreferences' => '\HuaweiCloud\SDK\Aos\V1\Model\OperationPreferences'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stackSetId  资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈集的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给予的stack_set_id和当前资源栈集的ID不一致，则返回400
    * deploymentTargets  deploymentTargets
    * varOverrides  varOverrides
    * operationPreferences  operationPreferences
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stackSetId' => null,
        'deploymentTargets' => null,
        'varOverrides' => null,
        'operationPreferences' => null
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
    * stackSetId  资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈集的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给予的stack_set_id和当前资源栈集的ID不一致，则返回400
    * deploymentTargets  deploymentTargets
    * varOverrides  varOverrides
    * operationPreferences  operationPreferences
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stackSetId' => 'stack_set_id',
            'deploymentTargets' => 'deployment_targets',
            'varOverrides' => 'var_overrides',
            'operationPreferences' => 'operation_preferences'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stackSetId  资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈集的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给予的stack_set_id和当前资源栈集的ID不一致，则返回400
    * deploymentTargets  deploymentTargets
    * varOverrides  varOverrides
    * operationPreferences  operationPreferences
    *
    * @var string[]
    */
    protected static $setters = [
            'stackSetId' => 'setStackSetId',
            'deploymentTargets' => 'setDeploymentTargets',
            'varOverrides' => 'setVarOverrides',
            'operationPreferences' => 'setOperationPreferences'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stackSetId  资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈集的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给予的stack_set_id和当前资源栈集的ID不一致，则返回400
    * deploymentTargets  deploymentTargets
    * varOverrides  varOverrides
    * operationPreferences  operationPreferences
    *
    * @var string[]
    */
    protected static $getters = [
            'stackSetId' => 'getStackSetId',
            'deploymentTargets' => 'getDeploymentTargets',
            'varOverrides' => 'getVarOverrides',
            'operationPreferences' => 'getOperationPreferences'
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
        $this->container['stackSetId'] = isset($data['stackSetId']) ? $data['stackSetId'] : null;
        $this->container['deploymentTargets'] = isset($data['deploymentTargets']) ? $data['deploymentTargets'] : null;
        $this->container['varOverrides'] = isset($data['varOverrides']) ? $data['varOverrides'] : null;
        $this->container['operationPreferences'] = isset($data['operationPreferences']) ? $data['operationPreferences'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['stackSetId']) && (mb_strlen($this->container['stackSetId']) > 36)) {
                $invalidProperties[] = "invalid value for 'stackSetId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['stackSetId']) && (mb_strlen($this->container['stackSetId']) < 36)) {
                $invalidProperties[] = "invalid value for 'stackSetId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['stackSetId']) && !preg_match("/^[a-z0-9]+[a-z0-9-]*$/", $this->container['stackSetId'])) {
                $invalidProperties[] = "invalid value for 'stackSetId', must be conform to the pattern /^[a-z0-9]+[a-z0-9-]*$/.";
            }
        if ($this->container['deploymentTargets'] === null) {
            $invalidProperties[] = "'deploymentTargets' can't be null";
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
    * Gets stackSetId
    *  资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈集的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给予的stack_set_id和当前资源栈集的ID不一致，则返回400
    *
    * @return string|null
    */
    public function getStackSetId()
    {
        return $this->container['stackSetId'];
    }

    /**
    * Sets stackSetId
    *
    * @param string|null $stackSetId 资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈集的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给予的stack_set_id和当前资源栈集的ID不一致，则返回400
    *
    * @return $this
    */
    public function setStackSetId($stackSetId)
    {
        $this->container['stackSetId'] = $stackSetId;
        return $this;
    }

    /**
    * Gets deploymentTargets
    *  deploymentTargets
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\DeploymentTargets
    */
    public function getDeploymentTargets()
    {
        return $this->container['deploymentTargets'];
    }

    /**
    * Sets deploymentTargets
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\DeploymentTargets $deploymentTargets deploymentTargets
    *
    * @return $this
    */
    public function setDeploymentTargets($deploymentTargets)
    {
        $this->container['deploymentTargets'] = $deploymentTargets;
        return $this;
    }

    /**
    * Gets varOverrides
    *  varOverrides
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\VarOverridesPrimitiveTypeHolderVarOverrides|null
    */
    public function getVarOverrides()
    {
        return $this->container['varOverrides'];
    }

    /**
    * Sets varOverrides
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\VarOverridesPrimitiveTypeHolderVarOverrides|null $varOverrides varOverrides
    *
    * @return $this
    */
    public function setVarOverrides($varOverrides)
    {
        $this->container['varOverrides'] = $varOverrides;
        return $this;
    }

    /**
    * Gets operationPreferences
    *  operationPreferences
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\OperationPreferences|null
    */
    public function getOperationPreferences()
    {
        return $this->container['operationPreferences'];
    }

    /**
    * Sets operationPreferences
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\OperationPreferences|null $operationPreferences operationPreferences
    *
    * @return $this
    */
    public function setOperationPreferences($operationPreferences)
    {
        $this->container['operationPreferences'] = $operationPreferences;
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


<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Blueprint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Blueprint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * blueprintProductId  模板ID。
    * blueprintProductVersion  模板版本。
    * variables  模板部署参数。
    * isBlueprintHasMultiAccountResource  模板是否包含多账号资源。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'blueprintProductId' => 'string',
            'blueprintProductVersion' => 'string',
            'variables' => 'string',
            'isBlueprintHasMultiAccountResource' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * blueprintProductId  模板ID。
    * blueprintProductVersion  模板版本。
    * variables  模板部署参数。
    * isBlueprintHasMultiAccountResource  模板是否包含多账号资源。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'blueprintProductId' => null,
        'blueprintProductVersion' => null,
        'variables' => null,
        'isBlueprintHasMultiAccountResource' => null
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
    * blueprintProductId  模板ID。
    * blueprintProductVersion  模板版本。
    * variables  模板部署参数。
    * isBlueprintHasMultiAccountResource  模板是否包含多账号资源。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'blueprintProductId' => 'blueprint_product_id',
            'blueprintProductVersion' => 'blueprint_product_version',
            'variables' => 'variables',
            'isBlueprintHasMultiAccountResource' => 'is_blueprint_has_multi_account_resource'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * blueprintProductId  模板ID。
    * blueprintProductVersion  模板版本。
    * variables  模板部署参数。
    * isBlueprintHasMultiAccountResource  模板是否包含多账号资源。
    *
    * @var string[]
    */
    protected static $setters = [
            'blueprintProductId' => 'setBlueprintProductId',
            'blueprintProductVersion' => 'setBlueprintProductVersion',
            'variables' => 'setVariables',
            'isBlueprintHasMultiAccountResource' => 'setIsBlueprintHasMultiAccountResource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * blueprintProductId  模板ID。
    * blueprintProductVersion  模板版本。
    * variables  模板部署参数。
    * isBlueprintHasMultiAccountResource  模板是否包含多账号资源。
    *
    * @var string[]
    */
    protected static $getters = [
            'blueprintProductId' => 'getBlueprintProductId',
            'blueprintProductVersion' => 'getBlueprintProductVersion',
            'variables' => 'getVariables',
            'isBlueprintHasMultiAccountResource' => 'getIsBlueprintHasMultiAccountResource'
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
        $this->container['blueprintProductId'] = isset($data['blueprintProductId']) ? $data['blueprintProductId'] : null;
        $this->container['blueprintProductVersion'] = isset($data['blueprintProductVersion']) ? $data['blueprintProductVersion'] : null;
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
        $this->container['isBlueprintHasMultiAccountResource'] = isset($data['isBlueprintHasMultiAccountResource']) ? $data['isBlueprintHasMultiAccountResource'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['blueprintProductId']) && (mb_strlen($this->container['blueprintProductId']) > 128)) {
                $invalidProperties[] = "invalid value for 'blueprintProductId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['blueprintProductId']) && (mb_strlen($this->container['blueprintProductId']) < 1)) {
                $invalidProperties[] = "invalid value for 'blueprintProductId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['blueprintProductId']) && !preg_match("/^[a-z0-9][a-z0-9-]{35}$/", $this->container['blueprintProductId'])) {
                $invalidProperties[] = "invalid value for 'blueprintProductId', must be conform to the pattern /^[a-z0-9][a-z0-9-]{35}$/.";
            }
            if (!is_null($this->container['blueprintProductVersion']) && (mb_strlen($this->container['blueprintProductVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'blueprintProductVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['blueprintProductVersion']) && (mb_strlen($this->container['blueprintProductVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'blueprintProductVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['blueprintProductVersion']) && !preg_match("/^V[1-9][0-9]{0,9}$/", $this->container['blueprintProductVersion'])) {
                $invalidProperties[] = "invalid value for 'blueprintProductVersion', must be conform to the pattern /^V[1-9][0-9]{0,9}$/.";
            }
            if (!is_null($this->container['variables']) && (mb_strlen($this->container['variables']) > 51200)) {
                $invalidProperties[] = "invalid value for 'variables', the character length must be smaller than or equal to 51200.";
            }
            if (!is_null($this->container['variables']) && (mb_strlen($this->container['variables']) < 0)) {
                $invalidProperties[] = "invalid value for 'variables', the character length must be bigger than or equal to 0.";
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
    * Gets blueprintProductId
    *  模板ID。
    *
    * @return string|null
    */
    public function getBlueprintProductId()
    {
        return $this->container['blueprintProductId'];
    }

    /**
    * Sets blueprintProductId
    *
    * @param string|null $blueprintProductId 模板ID。
    *
    * @return $this
    */
    public function setBlueprintProductId($blueprintProductId)
    {
        $this->container['blueprintProductId'] = $blueprintProductId;
        return $this;
    }

    /**
    * Gets blueprintProductVersion
    *  模板版本。
    *
    * @return string|null
    */
    public function getBlueprintProductVersion()
    {
        return $this->container['blueprintProductVersion'];
    }

    /**
    * Sets blueprintProductVersion
    *
    * @param string|null $blueprintProductVersion 模板版本。
    *
    * @return $this
    */
    public function setBlueprintProductVersion($blueprintProductVersion)
    {
        $this->container['blueprintProductVersion'] = $blueprintProductVersion;
        return $this;
    }

    /**
    * Gets variables
    *  模板部署参数。
    *
    * @return string|null
    */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
    * Sets variables
    *
    * @param string|null $variables 模板部署参数。
    *
    * @return $this
    */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;
        return $this;
    }

    /**
    * Gets isBlueprintHasMultiAccountResource
    *  模板是否包含多账号资源。
    *
    * @return bool|null
    */
    public function getIsBlueprintHasMultiAccountResource()
    {
        return $this->container['isBlueprintHasMultiAccountResource'];
    }

    /**
    * Sets isBlueprintHasMultiAccountResource
    *
    * @param bool|null $isBlueprintHasMultiAccountResource 模板是否包含多账号资源。
    *
    * @return $this
    */
    public function setIsBlueprintHasMultiAccountResource($isBlueprintHasMultiAccountResource)
    {
        $this->container['isBlueprintHasMultiAccountResource'] = $isBlueprintHasMultiAccountResource;
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


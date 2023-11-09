<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePasswordAuthRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePasswordAuthRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repoType  仓库类型。 支持口令授权的仓库类型有：github、devcloud、bitbucket。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repoType' => 'string',
            'body' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\AccessPassword'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repoType  仓库类型。 支持口令授权的仓库类型有：github、devcloud、bitbucket。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repoType' => null,
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
    * repoType  仓库类型。 支持口令授权的仓库类型有：github、devcloud、bitbucket。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repoType' => 'repo_type',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repoType  仓库类型。 支持口令授权的仓库类型有：github、devcloud、bitbucket。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'repoType' => 'setRepoType',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repoType  仓库类型。 支持口令授权的仓库类型有：github、devcloud、bitbucket。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'repoType' => 'getRepoType',
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
    const REPO_TYPE_GITHUB = 'github';
    const REPO_TYPE_DEVCLOUD = 'devcloud';
    const REPO_TYPE_BITBUCKET = 'bitbucket';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRepoTypeAllowableValues()
    {
        return [
            self::REPO_TYPE_GITHUB,
            self::REPO_TYPE_DEVCLOUD,
            self::REPO_TYPE_BITBUCKET,
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
        $this->container['repoType'] = isset($data['repoType']) ? $data['repoType'] : null;
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
        if ($this->container['repoType'] === null) {
            $invalidProperties[] = "'repoType' can't be null";
        }
            $allowedValues = $this->getRepoTypeAllowableValues();
                if (!is_null($this->container['repoType']) && !in_array($this->container['repoType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'repoType', must be one of '%s'",
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
    * Gets repoType
    *  仓库类型。 支持口令授权的仓库类型有：github、devcloud、bitbucket。
    *
    * @return string
    */
    public function getRepoType()
    {
        return $this->container['repoType'];
    }

    /**
    * Sets repoType
    *
    * @param string $repoType 仓库类型。 支持口令授权的仓库类型有：github、devcloud、bitbucket。
    *
    * @return $this
    */
    public function setRepoType($repoType)
    {
        $this->container['repoType'] = $repoType;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\AccessPassword|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\AccessPassword|null $body body
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


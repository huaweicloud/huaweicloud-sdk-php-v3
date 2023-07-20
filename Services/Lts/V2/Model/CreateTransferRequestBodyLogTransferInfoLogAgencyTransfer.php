<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTransferRequestBodyLogTransferInfoLogAgencyTransfer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTransferRequestBody_log_transfer_info_log_agency_transfer';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agencyDomainId  委托方账号ID
    * agencyDomainName  委托方账号名称
    * agencyName  委托方配置的委托名称
    * agencyProjectId  委托方项目ID
    * beAgencyDomainId  被委托方账号ID，实际配置转储的账号ID
    * beAgencyProjectId  被委托方项目ID，实际配置转储的账号的项目ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agencyDomainId' => 'string',
            'agencyDomainName' => 'string',
            'agencyName' => 'string',
            'agencyProjectId' => 'string',
            'beAgencyDomainId' => 'string',
            'beAgencyProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agencyDomainId  委托方账号ID
    * agencyDomainName  委托方账号名称
    * agencyName  委托方配置的委托名称
    * agencyProjectId  委托方项目ID
    * beAgencyDomainId  被委托方账号ID，实际配置转储的账号ID
    * beAgencyProjectId  被委托方项目ID，实际配置转储的账号的项目ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agencyDomainId' => null,
        'agencyDomainName' => null,
        'agencyName' => null,
        'agencyProjectId' => null,
        'beAgencyDomainId' => null,
        'beAgencyProjectId' => null
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
    * agencyDomainId  委托方账号ID
    * agencyDomainName  委托方账号名称
    * agencyName  委托方配置的委托名称
    * agencyProjectId  委托方项目ID
    * beAgencyDomainId  被委托方账号ID，实际配置转储的账号ID
    * beAgencyProjectId  被委托方项目ID，实际配置转储的账号的项目ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agencyDomainId' => 'agency_domain_id',
            'agencyDomainName' => 'agency_domain_name',
            'agencyName' => 'agency_name',
            'agencyProjectId' => 'agency_project_id',
            'beAgencyDomainId' => 'be_agency_domain_id',
            'beAgencyProjectId' => 'be_agency_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agencyDomainId  委托方账号ID
    * agencyDomainName  委托方账号名称
    * agencyName  委托方配置的委托名称
    * agencyProjectId  委托方项目ID
    * beAgencyDomainId  被委托方账号ID，实际配置转储的账号ID
    * beAgencyProjectId  被委托方项目ID，实际配置转储的账号的项目ID
    *
    * @var string[]
    */
    protected static $setters = [
            'agencyDomainId' => 'setAgencyDomainId',
            'agencyDomainName' => 'setAgencyDomainName',
            'agencyName' => 'setAgencyName',
            'agencyProjectId' => 'setAgencyProjectId',
            'beAgencyDomainId' => 'setBeAgencyDomainId',
            'beAgencyProjectId' => 'setBeAgencyProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agencyDomainId  委托方账号ID
    * agencyDomainName  委托方账号名称
    * agencyName  委托方配置的委托名称
    * agencyProjectId  委托方项目ID
    * beAgencyDomainId  被委托方账号ID，实际配置转储的账号ID
    * beAgencyProjectId  被委托方项目ID，实际配置转储的账号的项目ID
    *
    * @var string[]
    */
    protected static $getters = [
            'agencyDomainId' => 'getAgencyDomainId',
            'agencyDomainName' => 'getAgencyDomainName',
            'agencyName' => 'getAgencyName',
            'agencyProjectId' => 'getAgencyProjectId',
            'beAgencyDomainId' => 'getBeAgencyDomainId',
            'beAgencyProjectId' => 'getBeAgencyProjectId'
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
        $this->container['agencyDomainId'] = isset($data['agencyDomainId']) ? $data['agencyDomainId'] : null;
        $this->container['agencyDomainName'] = isset($data['agencyDomainName']) ? $data['agencyDomainName'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['agencyProjectId'] = isset($data['agencyProjectId']) ? $data['agencyProjectId'] : null;
        $this->container['beAgencyDomainId'] = isset($data['beAgencyDomainId']) ? $data['beAgencyDomainId'] : null;
        $this->container['beAgencyProjectId'] = isset($data['beAgencyProjectId']) ? $data['beAgencyProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['agencyDomainId'] === null) {
            $invalidProperties[] = "'agencyDomainId' can't be null";
        }
            if ((mb_strlen($this->container['agencyDomainId']) > 128)) {
                $invalidProperties[] = "invalid value for 'agencyDomainId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['agencyDomainId']) < 1)) {
                $invalidProperties[] = "invalid value for 'agencyDomainId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['agencyDomainName'] === null) {
            $invalidProperties[] = "'agencyDomainName' can't be null";
        }
            if ((mb_strlen($this->container['agencyDomainName']) > 128)) {
                $invalidProperties[] = "invalid value for 'agencyDomainName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['agencyDomainName']) < 1)) {
                $invalidProperties[] = "invalid value for 'agencyDomainName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['agencyName'] === null) {
            $invalidProperties[] = "'agencyName' can't be null";
        }
            if ((mb_strlen($this->container['agencyName']) > 128)) {
                $invalidProperties[] = "invalid value for 'agencyName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['agencyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'agencyName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['agencyProjectId'] === null) {
            $invalidProperties[] = "'agencyProjectId' can't be null";
        }
            if ((mb_strlen($this->container['agencyProjectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'agencyProjectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['agencyProjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'agencyProjectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['beAgencyDomainId'] === null) {
            $invalidProperties[] = "'beAgencyDomainId' can't be null";
        }
            if ((mb_strlen($this->container['beAgencyDomainId']) > 128)) {
                $invalidProperties[] = "invalid value for 'beAgencyDomainId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['beAgencyDomainId']) < 1)) {
                $invalidProperties[] = "invalid value for 'beAgencyDomainId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['beAgencyProjectId'] === null) {
            $invalidProperties[] = "'beAgencyProjectId' can't be null";
        }
            if ((mb_strlen($this->container['beAgencyProjectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'beAgencyProjectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['beAgencyProjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'beAgencyProjectId', the character length must be bigger than or equal to 32.";
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
    * Gets agencyDomainId
    *  委托方账号ID
    *
    * @return string
    */
    public function getAgencyDomainId()
    {
        return $this->container['agencyDomainId'];
    }

    /**
    * Sets agencyDomainId
    *
    * @param string $agencyDomainId 委托方账号ID
    *
    * @return $this
    */
    public function setAgencyDomainId($agencyDomainId)
    {
        $this->container['agencyDomainId'] = $agencyDomainId;
        return $this;
    }

    /**
    * Gets agencyDomainName
    *  委托方账号名称
    *
    * @return string
    */
    public function getAgencyDomainName()
    {
        return $this->container['agencyDomainName'];
    }

    /**
    * Sets agencyDomainName
    *
    * @param string $agencyDomainName 委托方账号名称
    *
    * @return $this
    */
    public function setAgencyDomainName($agencyDomainName)
    {
        $this->container['agencyDomainName'] = $agencyDomainName;
        return $this;
    }

    /**
    * Gets agencyName
    *  委托方配置的委托名称
    *
    * @return string
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string $agencyName 委托方配置的委托名称
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets agencyProjectId
    *  委托方项目ID
    *
    * @return string
    */
    public function getAgencyProjectId()
    {
        return $this->container['agencyProjectId'];
    }

    /**
    * Sets agencyProjectId
    *
    * @param string $agencyProjectId 委托方项目ID
    *
    * @return $this
    */
    public function setAgencyProjectId($agencyProjectId)
    {
        $this->container['agencyProjectId'] = $agencyProjectId;
        return $this;
    }

    /**
    * Gets beAgencyDomainId
    *  被委托方账号ID，实际配置转储的账号ID
    *
    * @return string
    */
    public function getBeAgencyDomainId()
    {
        return $this->container['beAgencyDomainId'];
    }

    /**
    * Sets beAgencyDomainId
    *
    * @param string $beAgencyDomainId 被委托方账号ID，实际配置转储的账号ID
    *
    * @return $this
    */
    public function setBeAgencyDomainId($beAgencyDomainId)
    {
        $this->container['beAgencyDomainId'] = $beAgencyDomainId;
        return $this;
    }

    /**
    * Gets beAgencyProjectId
    *  被委托方项目ID，实际配置转储的账号的项目ID
    *
    * @return string
    */
    public function getBeAgencyProjectId()
    {
        return $this->container['beAgencyProjectId'];
    }

    /**
    * Sets beAgencyProjectId
    *
    * @param string $beAgencyProjectId 被委托方项目ID，实际配置转储的账号的项目ID
    *
    * @return $this
    */
    public function setBeAgencyProjectId($beAgencyProjectId)
    {
        $this->container['beAgencyProjectId'] = $beAgencyProjectId;
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


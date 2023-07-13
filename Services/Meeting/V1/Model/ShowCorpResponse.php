<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCorpResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCorpResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * basicInfo  basicInfo
    * adminInfo  adminInfo
    * resInfo  resInfo
    * groupDto  groupDto
    * id  企业id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'basicInfo' => '\HuaweiCloud\SDK\Meeting\V1\Model\QueryCorpBasicResultDTO',
            'adminInfo' => '\HuaweiCloud\SDK\Meeting\V1\Model\QueryAdminResultDTO',
            'resInfo' => '\HuaweiCloud\SDK\Meeting\V1\Model\QueryCorpResResultDTO',
            'groupDto' => '\HuaweiCloud\SDK\Meeting\V1\Model\OrgGroupDTO',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * basicInfo  basicInfo
    * adminInfo  adminInfo
    * resInfo  resInfo
    * groupDto  groupDto
    * id  企业id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'basicInfo' => null,
        'adminInfo' => null,
        'resInfo' => null,
        'groupDto' => null,
        'id' => null
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
    * basicInfo  basicInfo
    * adminInfo  adminInfo
    * resInfo  resInfo
    * groupDto  groupDto
    * id  企业id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'basicInfo' => 'basicInfo',
            'adminInfo' => 'adminInfo',
            'resInfo' => 'resInfo',
            'groupDto' => 'groupDTO',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * basicInfo  basicInfo
    * adminInfo  adminInfo
    * resInfo  resInfo
    * groupDto  groupDto
    * id  企业id。
    *
    * @var string[]
    */
    protected static $setters = [
            'basicInfo' => 'setBasicInfo',
            'adminInfo' => 'setAdminInfo',
            'resInfo' => 'setResInfo',
            'groupDto' => 'setGroupDto',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * basicInfo  basicInfo
    * adminInfo  adminInfo
    * resInfo  resInfo
    * groupDto  groupDto
    * id  企业id。
    *
    * @var string[]
    */
    protected static $getters = [
            'basicInfo' => 'getBasicInfo',
            'adminInfo' => 'getAdminInfo',
            'resInfo' => 'getResInfo',
            'groupDto' => 'getGroupDto',
            'id' => 'getId'
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
        $this->container['basicInfo'] = isset($data['basicInfo']) ? $data['basicInfo'] : null;
        $this->container['adminInfo'] = isset($data['adminInfo']) ? $data['adminInfo'] : null;
        $this->container['resInfo'] = isset($data['resInfo']) ? $data['resInfo'] : null;
        $this->container['groupDto'] = isset($data['groupDto']) ? $data['groupDto'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
    * Gets basicInfo
    *  basicInfo
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\QueryCorpBasicResultDTO|null
    */
    public function getBasicInfo()
    {
        return $this->container['basicInfo'];
    }

    /**
    * Sets basicInfo
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\QueryCorpBasicResultDTO|null $basicInfo basicInfo
    *
    * @return $this
    */
    public function setBasicInfo($basicInfo)
    {
        $this->container['basicInfo'] = $basicInfo;
        return $this;
    }

    /**
    * Gets adminInfo
    *  adminInfo
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\QueryAdminResultDTO|null
    */
    public function getAdminInfo()
    {
        return $this->container['adminInfo'];
    }

    /**
    * Sets adminInfo
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\QueryAdminResultDTO|null $adminInfo adminInfo
    *
    * @return $this
    */
    public function setAdminInfo($adminInfo)
    {
        $this->container['adminInfo'] = $adminInfo;
        return $this;
    }

    /**
    * Gets resInfo
    *  resInfo
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\QueryCorpResResultDTO|null
    */
    public function getResInfo()
    {
        return $this->container['resInfo'];
    }

    /**
    * Sets resInfo
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\QueryCorpResResultDTO|null $resInfo resInfo
    *
    * @return $this
    */
    public function setResInfo($resInfo)
    {
        $this->container['resInfo'] = $resInfo;
        return $this;
    }

    /**
    * Gets groupDto
    *  groupDto
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\OrgGroupDTO|null
    */
    public function getGroupDto()
    {
        return $this->container['groupDto'];
    }

    /**
    * Sets groupDto
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\OrgGroupDTO|null $groupDto groupDto
    *
    * @return $this
    */
    public function setGroupDto($groupDto)
    {
        $this->container['groupDto'] = $groupDto;
        return $this;
    }

    /**
    * Gets id
    *  企业id。
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
    * @param string|null $id 企业id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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


<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApplyTableAuthorityRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApplyTableAuthorityRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * approver  approver
    * tableInfo  tableInfo
    * proposers  申请人列表
    * reason  申请理由
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'approver' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableApprover',
            'tableInfo' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListTableApproversRequestBody',
            'proposers' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableProposers[]',
            'reason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * approver  approver
    * tableInfo  tableInfo
    * proposers  申请人列表
    * reason  申请理由
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'approver' => null,
        'tableInfo' => null,
        'proposers' => null,
        'reason' => null
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
    * approver  approver
    * tableInfo  tableInfo
    * proposers  申请人列表
    * reason  申请理由
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'approver' => 'approver',
            'tableInfo' => 'table_info',
            'proposers' => 'proposers',
            'reason' => 'reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * approver  approver
    * tableInfo  tableInfo
    * proposers  申请人列表
    * reason  申请理由
    *
    * @var string[]
    */
    protected static $setters = [
            'approver' => 'setApprover',
            'tableInfo' => 'setTableInfo',
            'proposers' => 'setProposers',
            'reason' => 'setReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * approver  approver
    * tableInfo  tableInfo
    * proposers  申请人列表
    * reason  申请理由
    *
    * @var string[]
    */
    protected static $getters = [
            'approver' => 'getApprover',
            'tableInfo' => 'getTableInfo',
            'proposers' => 'getProposers',
            'reason' => 'getReason'
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
        $this->container['approver'] = isset($data['approver']) ? $data['approver'] : null;
        $this->container['tableInfo'] = isset($data['tableInfo']) ? $data['tableInfo'] : null;
        $this->container['proposers'] = isset($data['proposers']) ? $data['proposers'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
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
    * Gets approver
    *  approver
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableApprover|null
    */
    public function getApprover()
    {
        return $this->container['approver'];
    }

    /**
    * Sets approver
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableApprover|null $approver approver
    *
    * @return $this
    */
    public function setApprover($approver)
    {
        $this->container['approver'] = $approver;
        return $this;
    }

    /**
    * Gets tableInfo
    *  tableInfo
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListTableApproversRequestBody|null
    */
    public function getTableInfo()
    {
        return $this->container['tableInfo'];
    }

    /**
    * Sets tableInfo
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ListTableApproversRequestBody|null $tableInfo tableInfo
    *
    * @return $this
    */
    public function setTableInfo($tableInfo)
    {
        $this->container['tableInfo'] = $tableInfo;
        return $this;
    }

    /**
    * Gets proposers
    *  申请人列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableProposers[]|null
    */
    public function getProposers()
    {
        return $this->container['proposers'];
    }

    /**
    * Sets proposers
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableProposers[]|null $proposers 申请人列表
    *
    * @return $this
    */
    public function setProposers($proposers)
    {
        $this->container['proposers'] = $proposers;
        return $this;
    }

    /**
    * Gets reason
    *  申请理由
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
    * @param string|null $reason 申请理由
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
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


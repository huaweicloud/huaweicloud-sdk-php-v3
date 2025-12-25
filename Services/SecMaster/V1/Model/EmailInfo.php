<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EmailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EmailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reportContent  报告的base64编码
    * emailTitle  邮件标题
    * emailTo  收件人邮箱
    * emailCc  抄送人邮箱
    * emailContent  邮件内容
    * reportFileType  附件类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reportContent' => 'string',
            'emailTitle' => 'string',
            'emailTo' => 'string',
            'emailCc' => 'string',
            'emailContent' => 'string',
            'reportFileType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reportContent  报告的base64编码
    * emailTitle  邮件标题
    * emailTo  收件人邮箱
    * emailCc  抄送人邮箱
    * emailContent  邮件内容
    * reportFileType  附件类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reportContent' => null,
        'emailTitle' => null,
        'emailTo' => null,
        'emailCc' => null,
        'emailContent' => null,
        'reportFileType' => null
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
    * reportContent  报告的base64编码
    * emailTitle  邮件标题
    * emailTo  收件人邮箱
    * emailCc  抄送人邮箱
    * emailContent  邮件内容
    * reportFileType  附件类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reportContent' => 'report_content',
            'emailTitle' => 'email_title',
            'emailTo' => 'email_to',
            'emailCc' => 'email_cc',
            'emailContent' => 'email_content',
            'reportFileType' => 'report_file_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reportContent  报告的base64编码
    * emailTitle  邮件标题
    * emailTo  收件人邮箱
    * emailCc  抄送人邮箱
    * emailContent  邮件内容
    * reportFileType  附件类型
    *
    * @var string[]
    */
    protected static $setters = [
            'reportContent' => 'setReportContent',
            'emailTitle' => 'setEmailTitle',
            'emailTo' => 'setEmailTo',
            'emailCc' => 'setEmailCc',
            'emailContent' => 'setEmailContent',
            'reportFileType' => 'setReportFileType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reportContent  报告的base64编码
    * emailTitle  邮件标题
    * emailTo  收件人邮箱
    * emailCc  抄送人邮箱
    * emailContent  邮件内容
    * reportFileType  附件类型
    *
    * @var string[]
    */
    protected static $getters = [
            'reportContent' => 'getReportContent',
            'emailTitle' => 'getEmailTitle',
            'emailTo' => 'getEmailTo',
            'emailCc' => 'getEmailCc',
            'emailContent' => 'getEmailContent',
            'reportFileType' => 'getReportFileType'
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
        $this->container['reportContent'] = isset($data['reportContent']) ? $data['reportContent'] : null;
        $this->container['emailTitle'] = isset($data['emailTitle']) ? $data['emailTitle'] : null;
        $this->container['emailTo'] = isset($data['emailTo']) ? $data['emailTo'] : null;
        $this->container['emailCc'] = isset($data['emailCc']) ? $data['emailCc'] : null;
        $this->container['emailContent'] = isset($data['emailContent']) ? $data['emailContent'] : null;
        $this->container['reportFileType'] = isset($data['reportFileType']) ? $data['reportFileType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['reportContent']) && (mb_strlen($this->container['reportContent']) > 65525)) {
                $invalidProperties[] = "invalid value for 'reportContent', the character length must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['reportContent']) && (mb_strlen($this->container['reportContent']) < 1)) {
                $invalidProperties[] = "invalid value for 'reportContent', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['emailTitle']) && (mb_strlen($this->container['emailTitle']) > 256)) {
                $invalidProperties[] = "invalid value for 'emailTitle', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['emailTitle']) && (mb_strlen($this->container['emailTitle']) < 1)) {
                $invalidProperties[] = "invalid value for 'emailTitle', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['emailTo']) && (mb_strlen($this->container['emailTo']) > 256)) {
                $invalidProperties[] = "invalid value for 'emailTo', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['emailTo']) && (mb_strlen($this->container['emailTo']) < 1)) {
                $invalidProperties[] = "invalid value for 'emailTo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['emailCc']) && (mb_strlen($this->container['emailCc']) > 256)) {
                $invalidProperties[] = "invalid value for 'emailCc', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['emailCc']) && (mb_strlen($this->container['emailCc']) < 1)) {
                $invalidProperties[] = "invalid value for 'emailCc', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['emailContent']) && (mb_strlen($this->container['emailContent']) > 256)) {
                $invalidProperties[] = "invalid value for 'emailContent', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['emailContent']) && (mb_strlen($this->container['emailContent']) < 1)) {
                $invalidProperties[] = "invalid value for 'emailContent', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reportFileType']) && (mb_strlen($this->container['reportFileType']) > 256)) {
                $invalidProperties[] = "invalid value for 'reportFileType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['reportFileType']) && (mb_strlen($this->container['reportFileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'reportFileType', the character length must be bigger than or equal to 1.";
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
    * Gets reportContent
    *  报告的base64编码
    *
    * @return string|null
    */
    public function getReportContent()
    {
        return $this->container['reportContent'];
    }

    /**
    * Sets reportContent
    *
    * @param string|null $reportContent 报告的base64编码
    *
    * @return $this
    */
    public function setReportContent($reportContent)
    {
        $this->container['reportContent'] = $reportContent;
        return $this;
    }

    /**
    * Gets emailTitle
    *  邮件标题
    *
    * @return string|null
    */
    public function getEmailTitle()
    {
        return $this->container['emailTitle'];
    }

    /**
    * Sets emailTitle
    *
    * @param string|null $emailTitle 邮件标题
    *
    * @return $this
    */
    public function setEmailTitle($emailTitle)
    {
        $this->container['emailTitle'] = $emailTitle;
        return $this;
    }

    /**
    * Gets emailTo
    *  收件人邮箱
    *
    * @return string|null
    */
    public function getEmailTo()
    {
        return $this->container['emailTo'];
    }

    /**
    * Sets emailTo
    *
    * @param string|null $emailTo 收件人邮箱
    *
    * @return $this
    */
    public function setEmailTo($emailTo)
    {
        $this->container['emailTo'] = $emailTo;
        return $this;
    }

    /**
    * Gets emailCc
    *  抄送人邮箱
    *
    * @return string|null
    */
    public function getEmailCc()
    {
        return $this->container['emailCc'];
    }

    /**
    * Sets emailCc
    *
    * @param string|null $emailCc 抄送人邮箱
    *
    * @return $this
    */
    public function setEmailCc($emailCc)
    {
        $this->container['emailCc'] = $emailCc;
        return $this;
    }

    /**
    * Gets emailContent
    *  邮件内容
    *
    * @return string|null
    */
    public function getEmailContent()
    {
        return $this->container['emailContent'];
    }

    /**
    * Sets emailContent
    *
    * @param string|null $emailContent 邮件内容
    *
    * @return $this
    */
    public function setEmailContent($emailContent)
    {
        $this->container['emailContent'] = $emailContent;
        return $this;
    }

    /**
    * Gets reportFileType
    *  附件类型
    *
    * @return string|null
    */
    public function getReportFileType()
    {
        return $this->container['reportFileType'];
    }

    /**
    * Sets reportFileType
    *
    * @param string|null $reportFileType 附件类型
    *
    * @return $this
    */
    public function setReportFileType($reportFileType)
    {
        $this->container['reportFileType'] = $reportFileType;
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

